<?php
/**
 * Template part for showing password in form
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 *
 * A responsive timeline that can house images in each timeline item. Works 
 * * with SVG's or images. Change the $timeline-item-card variable to true 
 * to add a background to each timeline content item.
 */

?>
<style>
 
.show-password {
  width: 100%;
}

.show-password label {
  position: absolute;
  left: -9999px;
  text-indent: -9999px;
}

.password-wrapper {
  position: relative;
}

.password + .unmask {
  position: absolute;
  right: 12px;
  top: 50%;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  text-indent: -9999px;
  width: 25px;
  height: 25px;
  background: #aaa;
  border-radius: 50%;
  cursor: pointer;
  border: none;
  -webkit-appearance: none;
}

.password + .unmask:before {
  content: "";
  position: absolute;
  top: 4px;
  left: 4px;
  width: 17px;
  height: 17px;
  background: #e3e3e3;
  z-index: 1;
  border-radius: 50%;
}

.password[type="text"] + .unmask:after {
  content: "";
  position: absolute;
  top: 6px;
  left: 6px;
  width: 13px;
  height: 13px;
  background: #aaa;
  z-index: 2;
  border-radius: 50%;
}
 

</style>

<?php wp_reset_query(); 
// sort by priority - custom field
 $args = array(
  'post_type' => ''
   /*'orderby'   => 'meta_value',
    'order' => 'ASC',  */  
 );
$query = new WP_Query( $args ); ?>
 
 <form class="show-password">
  <label for="username">Your login</label>
  <input type="text" value="" placeholder="Enter Username" id="username">
  <div class="password-wrapper">
    <label for="password">Your password</label>
    <input type="password" value="" placeholder="Enter Password" id="password" class="password">
    <button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button>
  </div>
</form>

<script>
  $(document).foundation();

/*
  Switch actions
*/
$('.unmask').on('click', function(){

  if($(this).prev('input').attr('type') == 'password')
    changeType($(this).prev('input'), 'text');

  else
    changeType($(this).prev('input'), 'password');

  return false;
});

function changeType(x, type) {
  if(x.prop('type') == type)
  return x; //That was easy.
  try {
    return x.prop('type', type); //Stupid IE security will not allow this
  } catch(e) {
    //Try re-creating the element (yep... this sucks)
    //jQuery has no html() method for the element, so we have to put into a div first
    var html = $("<div>").append(x.clone()).html();
    var regex = /type=(\")?([^\"\s]+)(\")?/; //matches type=text or type="text"
    //If no match, we add the type attribute to the end; otherwise, we replace
    var tmp = $(html.match(regex) == null ?
      html.replace(">", ' type="' + type + '">') :
      html.replace(regex, 'type="' + type + '"') );
    //Copy data from old element
    tmp.data('type', x.data('type') );
    var events = x.data('events');
    var cb = function(events) {
      return function() {
            //Bind all prior events
            for(i in events)
            {
              var y = events[i];
              for(j in y)
                tmp.bind(i, y[j].handler);
            }
          }
        }(events);
        x.replaceWith(tmp);
    setTimeout(cb, 10); //Wait a bit to call function
    return tmp;
  }
}

</script>