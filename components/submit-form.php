<div id="submitform">
  <div class='full form-bg'>
    <div class='form'>
     <a name='form_button'></a>
     <div class='row'>


      <form method='POST'  id="callback_form_footer" action="#form_button">
        <div class='large-12 columns'>
          <p id='thanks'>

          </p>
        </div>
        <div class='medium-6 large-6 columns'>

        <input type="text" name="page" value=<? echo '"'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'"' ?> style="display:none;" />

          <input class='required' name='name' placeholder='Имя' type='text' value=""/>

          <input class='required email' name='email' placeholder='Email' type='text' value=""/>

          <input class='required' name='phone' placeholder='Телефон' type='text'  value="" />

        </div>
        <div class='medium-6 large-6 columns'>

          <textarea class='required' name='message' placeholder='Сообщение'></textarea>

          <input class='button white'  form="callback_form_footer" type='submit'>

        </div>
      </form>

    </div>
  </div>
</div>


<a href="#modal" class="overlay_modal" id="modalWindow" onclick="resets()"></a>
<div id="signup">
	<div id="signup-ct">
   <div id="signup-header">
    <h2 id="head">Оставить заявку</h2>
    <a href="default.htm" class="modal_close" id="close" onclick="resets()"><i class="fa fa-times"></i></a>
  </div>
  <div id="result"></div>

  <form method="post" action="default.htm">
    <input type="text" name="filter-spam" value=" " style="display:none;" />
    <div class="txt-fld hidden-input">
     <!--input type="text" name="order" value="Тема" readonly="readonly" id="subj_name"/-->
   </div>
   <div class="txt-fld">
     <select size="1" name="order" id="subj">
       <option disabled selected>Выберите услугу</option>
       <option value="t0">Бесплатный звонок</option>
       <option value="t1">Разработка сайтов</option>
       <option value="t2">Продвижение сайтов</option>
       <option value="t3">Контекстная реклама</option>
       <option value="t4">Разработка фирменного стиля</option>
       <option value="t5">Поддержка сайтов</option>
       <option value="t6">Другое</option>
     </select>
   </div>
   <div class="txt-fld">
     <input type="text" name="email" placeholder="email" /><b id="error_email"></b>
   </div>
   <div class="txt-fld">
     <input type="text" name="phone" pattern="[0-9]*" placeholder="телефон"/> <b id="error_tel"></b>
   </div>
   <div class="txt-fld">
     <textarea class="required" name="message" placeholder="текст сообщения"></textarea>
   </div>
   <input type="hidden" name="place" value="Главная">
   <div class="btn-fld centered-text">
     <a href="javascript:void(0)" onclick="one_click('form','result')" class="button">Отправить</a>
   </div>
 </form>
</div>
</div>

<script type="text/javascript">                                                  

$(document).ready(function() {

//E-mail Ajax Send
$("#callback_form_footer").submit(function() { //Change
  var th = $(this);
  $.ajax({
    type: "POST",
        url: "/components/callback.php", //Change
        data: th.serialize()
      }).done(function() {
        alert("Спасибо, ваша заявка отправлена");
        setTimeout(function() {
            // Done Functions
            th.trigger("reset");
          }, 1000);
        
      });
      return false;
    });
});            
</script>

<!-- Something staff... -->
<!-- <script type="text/javascript">
 function sub_name(sub,refer)
 {
  jQuery("input#subj_name").val(sub);
  var ref ='./';
  var a_link = ref + '#' + refer;
  jQuery("#close").attr('href',a_link);
  jQuery('#form').css({"display":"block"});
}

function resets()
{
  jQuery('#form').trigger( 'reset' );
  jQuery('#head').css({"display":"block"});
  jQuery('#result').html(' ');
  jQuery('#error_email').css({"display":"none"});
  jQuery('#error_tel').css({"display":"none"});
}

function resetsBrif()
{
  jQuery('#formBrif').trigger( 'reset' );
  jQuery('#headBrif').css({"display":"block"});
  jQuery('#resultBrif').html(' ');
  jQuery('#error_name_Brif').css({"display":"none"});
  jQuery('#error_tel_Brif').css({"display":"none"});
}
</script>

<script type="text/javascript">
 function one_click_Brif(form_id,div_id,id) 
 {
  jQuery('#' + div_id).parents("#signup-ct").parents("#signup").append( "<div class='preload'></div>" );
  var msg   = jQuery('#' + form_id).serialize();
  var url = document.location.href;
  jQuery.ajax({
    type: 'POST',
    url: url,
    data: msg,
    success: function(dataBrif) {

     jQuery( "div.preload" ).remove();

     var arrBrif = dataBrif.split('||');

     if(arrBrif[0]!='null')
     {
       jQuery('#error_name_Brif').css({"display":"block"});
       jQuery('#error_name_Brif').html(arrBrif[0]);
     }
     else
     {
      jQuery('#error_name_Brif').html('');
      jQuery('#error_name_Brif').css({"display":"none"});
    }

    if(arrBrif[1]!='null')
    {
     jQuery('#error_tel_Brif').css({"display":"block"});
     jQuery('#error_tel_Brif').html(arrBrif[1]);
   }
   else
   {
    jQuery('#error_tel_Brif').html('');
    jQuery('#error_tel_Brif').css({"display":"none"});
  }

  if(arrBrif[2]!='null')
  {
   jQuery('#' + div_id).html('<div class="sent_s">' + arrBrif[2] + '</div>');
   jQuery('formBrif').trigger( 'reset' );
   jQuery('#headBrif').css({"display":"none"});
   jQuery('#error_name_Brif').css({"display":"none"});
   jQuery('#error_tel_Brif').css({"display":"none"});
   jQuery('#formBrif').css({"display":"none"});
 }

},
error:  function(xhr, str){
 jQuery('#' + div_id).html('<div class="sent">' + xhr + '</div>');
 jQuery('#headBrif').css({"display":"none"});
 jQuery('#formBrif').css({"display":"none"});
}
});
}

function one_click(form_id,div_id,id) 
{
  jQuery('#' + div_id).parents("#signup-ct").parents("#signup").append( "<div class='preload'></div>" );
  var msg   = jQuery('#' + form_id).serialize();
  var url = document.location.href;
  jQuery.ajax({
    type: 'POST',
    url: url,
    data: msg,
    success: function(data) {

     jQuery( "div.preload" ).remove();

     var arr = data.split('||');

     if(arr[0]!='null')
     {
       jQuery('#error_email').css({"display":"block"});
       jQuery('#error_email').html(arr[0]);
     }
     else
     {
      jQuery('#error_email').html('');
      jQuery('#error_email').css({"display":"none"});
    }

    if(arr[1]!='null')
    {
     jQuery('#error_tel').css({"display":"block"});
     jQuery('#error_tel').html(arr[1]);
   }
   else
   {
    jQuery('#error_tel').html('');
    jQuery('#error_tel').css({"display":"none"});
  }

  if(arr[2]!='null')
  {
   jQuery('#' + div_id).html('<div class="sent_s">' + arr[2] + '</div>');
   jQuery('form').trigger( 'reset' );
   jQuery('#head').css({"display":"none"});
   jQuery('#error_email').css({"display":"none"});
   jQuery('#error_tel').css({"display":"none"});
   jQuery('#form').css({"display":"none"});
 }

},
error:  function(xhr, str){
 jQuery('#' + div_id).html('<div class="sent_s">' + 'Ошибка сообщение не отправлено! Используйте телефонный номер' + '</div>');
 jQuery('#head').css({"display":"none"});
 jQuery('#form').css({"display":"none"});
}
});
}
</script> -->
</div>

