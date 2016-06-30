$(function(){
    
                  $('#package_end_date').change(function(){

                        var Location_from = $('#package_Location_from').val();
                        var Location_to = $('#package_Location_to').val();
                        var Start_date = $('#package_start_date').val();
                        var End_date = $('#package_end_date').val();
                        $.post("modules/packages/ajax/late_checkout.php",{"Location_from":Location_from, "Location_to":Location_to, "Start_date":Start_date, "End_date":End_date, "loaddata":"latecheckout"},function(result){
                            var obj = jQuery.parseJSON( result );
                            if(obj.checkoutDate != null){
                                $('#late_checkout_block').css('display','block');
                                $('#checkout_date').val(obj.checkoutDate);
                                $('#checkout_date_text').html(obj.checkoutDate);
                            }else{
                                $('#late_checkout_block').css('display','none');
                                $('#checkout_date').val('');
                                $('#checkout_date_text').html('');
                                $('#late_checkout').removeAttr('checked');  
                            }
                        })
                        
                  })
                  $('#package_start_date').change(function(){
                            $('#package_end_date').attr('disabled', false).css({ opacity: 1 });
                            var fly_start_position = $( "#package_Location_from" ).val();
                            var fly_end_area = $( "#package_Location_to" ).val();
                            var fly_start_date = $("#package_start_date").val();

                    if(fly_end_area != '0' && fly_start_date != '')
                    {
                        $.post("modules/packages/ajax/get_fly_froms.php",{"fly_start_position":fly_start_position, "fly_end_area":fly_end_area, "fly_start_date":fly_start_date, "loaddata":"enddates"},function(result){
                            var dates_end = result.split('_');
                            window.disabledDays = new Array();
                            var disableds = '';
                            for(var i=0; i<dates_end.length; i++)
                            {
                                disableds = dates_end[i].split('-');
                                reversed = disableds[1] +'-'+ disableds[2] +'-'+ disableds[0];
                                disabledDays.push(reversed);
                            }
                        	$( "#package_end_date" ).datepicker({
                        		defaultDate: "+1w",
                        		changeMonth: true,
                        		changeYear: true,
                        		numberOfMonths: 1,
                                beforeShowDay:function(date)
                                {
                                     var m = date.getMonth() + 1, d = date.getDate(), y = date.getFullYear();
                                     if(d<10){d='0'+d} if(m<10){m='0'+m}
                                     for (i = 0; i < disabledDays.length; i++) {
                                        if($.inArray(m + '-' + d + '-' + y, disabledDays) != -1) {
                                            return [true];
                                        }
                                    }
                                    return [false];
                                }
                        	});
                        })
                    }
                        })
    /////////////////////////
    $('#package_type').change(function(){
        var package_id = $('#package_type').val();
        if(package_id != 0)
        {
               $('#package_start_date').attr('disabled', true).css({ opacity: 0.5 });
               $('#package_end_date').attr('disabled', true).css({ opacity: 0.5 });
               $('#checkin_date').attr('disabled', true).css({ opacity: 0.5 });
               $('#checkout_date').attr('disabled', true).css({ opacity: 0.5 });
               $('#package_hotel_name').attr('disabled', true).trigger("chosen:updated");//.css({ opacity: 0.5 });
               $('#package_Location_from').attr('disabled', true).trigger("chosen:updated");
               $('#package_Location_to').attr('disabled', true).trigger("chosen:updated");
            $.get("modules/packages/ajax/get_package_type.php?package_id=" + package_id , function(result){
               result = result.split("-");
               for(i=0; i<result.length; i++)
               {
                    // alert(result[i]);
                    switch(result[i])
                    {
                        case '2':
                            // alert(2);
                            $('#checkin_date').attr('disabled', false).css({ opacity: 1 }).datepicker("setDate", + 1).trigger("chosen:updated");
                            $('#checkout_date').attr('disabled', false).css({ opacity: 1 }).datepicker("setDate", + 3).trigger("chosen:updated");
                            $('#package_Location_to').attr('disabled', false).trigger("chosen:updated");
                            $('#package_hotel_name').attr('disabled', false).trigger("chosen:updated");
                        break;
                        case '3':
                          //   alert(2);
                            // $('#package_start_date').attr('disabled', false).css({ opacity: 1 });
                             //$('#package_end_date').attr('disabled', false).css({ opacity: 1 });
                             $('#package_Location_from').attr('disabled', false).trigger("chosen:updated");
                             $('#package_Location_to').attr('disabled', true).trigger("chosen:updated");
                             $('#package_hotel_name').attr('disabled', true).trigger("chosen:updated");
                        break;
                    }
               } 
            })
        }
    })
    
    
    /////////////////////
    $('#kids_picker').chosen().change(function(){
        kidsPicherCheck(0);
    })
    ////////////////////////
    $('#hotel_Location').change(function(){
        var location_value = $('#hotel_Location').val();
        if(location_value == 0)
        {
            disable_hotels_form();
        }else{
            enable_hotels_form();
        }
    })
    ////////////////////////
    $('#package_Location_from').change(function(){
        var location_value = $('#package_Location_from').val();
        if(location_value != 0)
        {
            $.post("modules/tickets/ajax/get_fly_froms.php",{"fly_start_position":location_value, "loaddata":"endpositoon"},function(result){
            $('#package_Location_to').html(result);
            $('#package_Location_to').attr('disabled', false).trigger("chosen:updated");
            $('#package_hotel_name').attr('disabled', false).trigger("chosen:updated");
            })
        }
    })
    ////////////////////////
    $('#package_Location_to').change(function(){
        var fly_start_position = $( "#package_Location_from" ).val();
        var fly_end_area = $('#package_Location_to').val();
        var package_hotel_name = $('#package_hotel_name').val();
        
        //if(location_value != 0)
        //{
            if(fly_end_area != '0')
                    {
                        
                        
                        $.post("modules/packages/ajax/get_fly_froms.php",{"package_hotel_name":package_hotel_name, "fly_end_area":fly_end_area, "loaddata":"hotelnames"},function(result){
                            $('#package_hotel_name').html(result).trigger("chosen:updated");
                        });
                        
                        $.post("modules/packages/ajax/get_fly_froms.php",{"fly_start_position":fly_start_position, "fly_end_area":fly_end_area, "loaddata":"daterange"},function(result){

                                $('#package_start_date').attr('disabled', false).css({ opacity: 1 });
                                $('#package_start_date').attr('disabled', false).css({ opacity: 1 });
                           var dates_array =  result.split('|');
                           var dates_start = dates_array[0].split('_');
                           var dates_end = dates_array[1].split('_');
                            //alert(dates_start);
                           //show_ticket_inputs();
                           var date = new Date();

                           
                            window.enabledDays = new Array();
                            window.mydates = new Array();
                            var enables = '';

                            for(var i=0; i<dates_start.length; i++)
                            {
                                enables = dates_start[i].split('-');
                                reversed = enables[1] +'-'+ enables[2] +'-'+ enables[0];
                                enabledDays.push(reversed);
                            }

                           $( "#package_start_date" ).datepicker({
                        		defaultDate: "+1w",
                        		changeMonth: true,
                        		changeYear: true,
                        		numberOfMonths: 1,
                                beforeShowDay: function(date)
                                {
                                    
                                     var m = date.getMonth() + 1, d = date.getDate(), y = date.getFullYear();
                                     if(d<10){d='0'+d} if(m<10){m='0'+m}
                                     for (i = 0; i < enabledDays.length; i++) {
                                        if($.inArray(m + '-' + d + '-' + y, enabledDays) != -1) {
                                            return [true];
                                        }
                                    }
                                    return [false];
                                }
                              
                        	});
                            
                            window.disabledDays = new Array();
                            var disableds = '';
                            for(var i=0; i<dates_end.length; i++)
                            {
                                disableds = dates_end[i].split('-');
                                reversed = disableds[1] +'-'+ disableds[2] +'-'+ disableds[0];
                                disabledDays.push(reversed);
                            }
                        	$( "#package_end_date" ).datepicker({
                        		defaultDate: "+1w",
                        		changeMonth: true,
                        		changeYear: true,
                        		numberOfMonths: 1,
                                beforeShowDay:function(date)
                                {
                                     var m = date.getMonth() + 1, d = date.getDate(), y = date.getFullYear();
                                     if(d<10){d='0'+d} if(m<10){m='0'+m}
                                     for (i = 0; i < disabledDays.length; i++) {
                                        if($.inArray(m + '-' + d + '-' + y, disabledDays) != -1) {
                                            return [true];
                                        }
                                    }
                                    return [false];
                                }
                        	});
                           
                           
                      });
                    }else{
                        $('#travel_start_date').attr('disabled', true).css({ opacity: 0.5 });
                        $('#travel_end_date').attr('disabled', true).css({ opacity: 0.5 });
                    }
            //$('#package_Location_to').attr('disabled', false).trigger("chosen:updated");
            //$('#start_date').attr('disabled', false).css({ opacity: 1 }).datepicker("setDate", + 1).trigger("chosen:updated");
            //$('#end_date').attr('disabled', false).css({ opacity: 1 }).datepicker("setDate", + 3).trigger("chosen:updated");
            enable_hotels_form();
        //}
    })
    
    //////////////////////  

})


////////
function enable_hotels_form()
{
   var date = new Date();

   //var datestart = new Date(date.getFullYear(), date.getMonth()+1, date.getDate()+1);
   //var dateend = new Date(date.getFullYear(), date.getMonth()+1, date.getDate()+3);
   // date.setDate(+1);
   //$('#start_date').attr('disabled', false).css({ opacity: 1 }).datepicker("setDate", + 1).trigger("chosen:updated");//val(date.getFullYear() + '-' + date.getMonth() + '-' +date.getDate())
   // date.setDate(+2);
   //$('#end_date').attr('disabled', false).css({ opacity: 1 }).datepicker("setDate",  + 3).trigger("chosen:updated");//val(date.getFullYear() + '-' + date.getMonth() + '-' +date.getDate())
   $('#adult_picker').attr('disabled', false).trigger("chosen:updated");
   $('#kids_picker').attr('disabled', false).trigger("chosen:updated");
   $('#package_submit_btn').attr('disabled', false).trigger("chosen:updated");
   $('#package_hotel_name').attr('disabled', false).trigger("chosen:updated"); 
}
