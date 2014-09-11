jQuery(document).ready(function() {
    
   jQuery.fn.arSwitchProfileType = function(options) {
      var $trigger,
         triggerOptionValue = options.triggerOptionValue,
         targetElements = options.targetElements,
         hideClass = options.hideClass;

      var registerEvents = function() {
         $trigger.on('change', $trigger, function(){
            switchProfiles();
         });
      }; 

      var switchProfiles = function() {
         var profileType = $trigger.find('option:selected').attr('data-ar-profile-type-switch');
         jQuery('.' + hideClass).removeClass(hideClass);
         jQuery('[' + targetElements + ']').each(function(){
            if(jQuery(this).attr(targetElements) !== profileType){
               jQuery(this).addClass(hideClass);
            }
         });
      };

      return this.each(function(){
         $trigger = jQuery(this);
         switchProfiles();
         registerEvents();
      });
   };
    
   jQuery('#arSwitchProfileType').arSwitchProfileType({
      triggerOptionValue: 'data-ar-profile-type-switch', 
      targetElements: 'data-ar-profile-type',
      hideClass: 'ar_profileTypeElementHide'
    });
});