/**
* Airbox – lightweight, airy jQuery lightbox
* Version 0.1.0 – https://github.com/AndyAkesson/airbox
*
* Copyright 2013, Anders Akesson
* Massachusetts Institute of Technology Licensed.
* Use as you please.
*
* @class Main
*/
(function($){
	"use strict";
	/**
	 * ab contains all deafults that the functionality requires;
	 * namespace, context, select, targetAttr, openTrigger, closeTrigger, resetCss.
	 * @method {Defaults} The default variables for ab.
	 * @param {namespace} Name of the events and css class prefix.
	 * @param {context} Context used to search for the lightbox content and triggers. 
	 * @param {select} Elements that trigger the lightbox.
	 * @param {targetAttr} Attribute of the triggered element that contains the select to the content.
	 * @param {openTrigger} Triggers the opening of the lightbox.
	 * @param {closeTrigger} Triggers the closing of the lightbox.
	 * @param {resetCss} Reset css.
	 * 
	*/
	var ab = {
		Defaults: {  
			namespace:    'airbox',         
			context:      'body',           
			select:       '[data-airbox]',  
			targetAttr:   'data-airbox',    
			openTrigger:  'click',          
			closeTrigger: 'click',          
			resetCss:     false,            
			open: function(event){          
				$.proxy($.airbox.methods.open, this, event)();
			},
			close: function(event){                   
				$.proxy($.airbox.methods.close, this, event)();
			}
		},
		methods: { 
			 /**
			 * Setup everything in the setup function.
			 * Access and override all methods using $.ab.methods.
			 * 
			 * @method abSetup
			 * @param  {config}  Configuration for the setup.
			 * @param  {content} The content coming into the function.
			 */
			abSetup: function(config, content){
				var $elem = $(this) || $(),
					config = $.extend({}, ab.Defaults, config),
					//Reset all the default css
					css = !config.resetCss ? config.namespace : config.namespace+'-reset',
					$background = $('<div class="'+css+'"><div class="'+css+'-content"><span class="'+css+'-close"></span></div></div>'),
					//Everything stored in self
					self = {
						config: config,
						content: content,
						$elem: $elem,
						$instance: $background.clone()
					};
					//Close when click on background 
					self.$instance.on(config.closeTrigger + '.' + config.namespace, $.proxy(config.close, self));
					//Bind or call open function 
					if($elem.length > 0 && this.tagName){
						$elem.on(config.openTrigger + '.' + config.namespace, $.proxy(config.open, self));
					} 
					else {
						$.proxy(config.open, self)();
					}
				},

			/**
			 * Prepares the content and converts it into a jQuery object.
			 * 
			 * @method getContent
			 */
			getContent: function(){
				var self = this,
					content = self.content,
					attr = self.$elem.attr(self.config.targetAttr);
				//Convert to jQuery object if it's a DOM object. 
				if(typeof content === 'string'){
					self.content = $(content);
				} 
				else if(content instanceof $ === false){ //If we have no jQuery Object.
					//Check if we have an image and create element.
					if(attr === 'image' || attr.match(/\.(png|jpg|jpeg|gif|tiff|bmp)$/i)){
						var url = attr.match(/\.(png|jpg|jpeg|gif|tiff|bmp)$/i) ? attr : self.$elem.attr('href');
						self.content = $('<img src="'+url+'" alt="" class="'+self.config.namespace+'-image" />');
					}
				//Else, create jquery element by using the attribute as select.
				else {
					self.content = $($(attr), self.config.context);
				}
			}
				self.content.addClass(self.config.namespace+'-inner');
			},

			/**
			 * Opens the lightbox.
			 * "this" contains $instance with the lightbox, and with the config.
			 * 
			 * @method open
			 * @param  event The event triggered
			 */
			open: function(event){
				if(event){
					event.preventDefault();
				}
				var self = this;
				//Hide scrollbars
    			$('body').css('overflow', 'hidden');
				// If we have content, add it and show the lightbox 
				if($.proxy(ab.methods.getContent, self)() !== false){
					$(document).bind('keyup.'+self.config.namespace, function(e) {
						if (e.keyCode == 27) { //27 is esc keycode
							self.$instance.find('.'+self.config.namespace+'-close').click();
						}
					});	
				self.$instance
					.prependTo('body').fadeIn(2500)
					.find('.'+self.config.namespace+'-close')
					.after(self.content);
				}
			},

			/**
			 * Closes the lightbox.
			 * "this" contains $instance with the lightbox, and the config.
			 * 
			 * @method close
			 * @param  event The event triggered.
			 */
			close: function(event){
				if(event){
					event.preventDefault();
				}
				//Show scrollbars
				$('body').css('overflow', 'auto'); 
				var self = this,
					config = self.config,
					$instance = $(event.target);
				if(($instance.is('.'+config.namespace)) || $instance.is('.'+config.namespace+'-close') ){
					$(document).unbind('keyup.'+self.config.namespace);

					self.$instance.fadeOut(function(){
						self.$instance.detach();
					});
				}
			}
		}
	};

	/**
	 * Extension of jQuery with a standalone airbox method.
	 * 
	 * @method airbox
	 * @param  $content Content coming in to the function.
	 * @param  config   Configurations
	 */
	$.airbox = function($content, config) {
		$.proxy(ab.methods.abSetup, null, config, $content)();
	};

	/**
	 * Extension of jQuery with select.
	 * 
	 * @method prototype.airbox
	 * @param  config   Configurations.
	 * @param  $content Content coming in to function.
	 */
	$.prototype.airbox = function(config, $content) {
		$(this).each(function(){
			$.proxy(ab.methods.abSetup, this, config, $content)();
		});
	};

	//Extension of airbox with default variables and methods.
	$.extend($.airbox, ab);

	/**
	 * Bind airbox on document.ready
	 * 
	 * @method $(document).ready
	 */
	$(document).ready(function(){
		var config = $.airbox.Defaults;
		$(config.select, config.context).airbox();
	});
 
}(jQuery));
