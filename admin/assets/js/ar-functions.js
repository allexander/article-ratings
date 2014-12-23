(function ( $ ) {
    
    var jQ = jQuery;
    
    /* 
     * Switch profile type
     */
    /*jQuery.fn.arSwitchProfileType = function(options) {
        var $trigger,
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
    });*/

    /* 
     * Add more Poll Group Sections 
     */
    $.fn.addPollGroupSection = function(options) {
        return this.each(function(){
            
            var $button, container, content;
            
            $button = $(this);
            container = options['container'];
            content = options['content'];
            
            $button.on('click', function(){
                $( content ).appendTo( container );
            });
        });
    };
    
    $('.add-poll-group-section').addPollGroupSection({
        container: '.poll-group-sections',
        content: '<div class="section"><input type="text" name="section[]" /><input type="button" value="Премахни" class="button action remove-section" /></div>'
    });
    

    /* 
     * Remove Poll Group Sections
     */
    $.fn.removePollGroupSection = function() {
        return this.each(function(){
            
            var $button;
            
            $button = $(this);
            
            $button.on('click', '.remove-section', function(){
                //if( $(this).parent().siblings().length > )
                $(this).parent().remove();
            });
        });
    };
    
    $('.poll-group-sections').removePollGroupSection();
    
}( jQuery ));