<?php
/**
 * Template part for form alert boxes
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?> 
 
 <style>


.alert-box {
  padding-right: 3.25rem;
  width: 100%;
}

.alert-box.callout {
  color: #fefefe;
  font-weight: bold;
}

.alert-box.alert {
  border: 3px solid #cc4b37;
  border-radius: 5px;
  background-color: rgba(204, 75, 55, 0.2);
}

.alert-box.warning {
  border: 3px solid #ffae00;
  border-radius: 5px;
  background-color: rgba(255, 174, 0, 0.2);
}

.alert-box.success {
  border: 3px solid #3adb76;
  border-radius: 5px;
  background-color: rgba(58, 219, 118, 0.2);
}

.alert-box.info {
  border: 3px solid #1779ba;
  border-radius: 5px;
  background-color: rgba(23, 121, 186, 0.2);
}

.alert-box i {
  border: 2px solid #fefefe;
  border-radius: 50%;
  padding: .3em .325em;
  margin-right: 0.5rem;
}

.alert-box .close-button {
  color: rgba(254, 254, 254, 0.5);
  font-size: 2rem;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  right: 1rem;
  font-weight: bold;
} 
</style> 
 
  <div data-closable class="alert-box callout alert">
  <i class="fa fa-ban"></i> Email doesn't match our records. Please try again.
<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&CircleTimes;</span>
  </button>
</div>

<div data-closable class="alert-box callout warning">
  <i class="fa fa-exclamation-triangle"></i> Please fill in all required fields.
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&CircleTimes;</span>
  </button>
</div>

<div data-closable class="alert-box callout success">
  <i class="fa fa-check"></i> File upload successful!
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&CircleTimes;</span>
  </button>
</div>

<div data-closable class="alert-box callout info">
  <i class="fa fa-eye"></i> You have 3 remaining credits. Spend wisely.
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&CircleTimes;</span>
  </button>
</div>