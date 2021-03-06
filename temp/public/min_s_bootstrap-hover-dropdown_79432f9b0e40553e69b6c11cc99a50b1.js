/**
 * @preserve
 * Project: Bootstrap Hover Dropdown
 * Author: Cameron Spear
 * Version: v2.2.1
 * Contributors: Mattia Larentis
 * Dependencies: Bootstrap's Dropdown plugin, jQuery
 * Description: A simple plugin to enable Bootstrap dropdowns to active on hover and provide a nice user experience.
 * License: MIT
 * Homepage: http://cameronspear.com/blog/bootstrap-dropdown-on-hover-plugin/
 */
;(function($,window,undefined){var $allDropdowns=$();$.fn.dropdownHover=function(options){if('ontouchstart' in document)return this;$allDropdowns=$allDropdowns.add(this.parent());return this.each(function(){var $this=$(this),$parent=$this.parent(),defaults={delay:500,hoverDelay:0,instantlyCloseOthers:!0},data={delay:$(this).data('delay'),hoverDelay:$(this).data('hover-delay'),instantlyCloseOthers:$(this).data('close-others')},showEvent='show.bs.dropdown',hideEvent='hide.bs.dropdown',settings=$.extend(!0,{},defaults,options,data),timeout,timeoutHover;$parent.hover(function(event){if(!$parent.hasClass('open')&&!$this.is(event.target)){return!0}
openDropdown(event)},function(){window.clearTimeout(timeoutHover)
timeout=window.setTimeout(function(){$this.attr('aria-expanded','false');$parent.removeClass('open');$this.trigger(hideEvent)},settings.delay)});$this.hover(function(event){if(!$parent.hasClass('open')&&!$parent.is(event.target)){return!0}
openDropdown(event)});$parent.find('.dropdown-submenu').each(function(){var $this=$(this);var subTimeout;$this.hover(function(){window.clearTimeout(subTimeout);$this.children('.dropdown-menu').show();$this.siblings().children('.dropdown-menu').hide()},function(){var $submenu=$this.children('.dropdown-menu');subTimeout=window.setTimeout(function(){$submenu.hide()},settings.delay)})});function openDropdown(event){if($this.parents(".navbar").find(".navbar-toggle").is(":visible")){return}
window.clearTimeout(timeout);window.clearTimeout(timeoutHover);timeoutHover=window.setTimeout(function(){$allDropdowns.find(':focus').blur();if(settings.instantlyCloseOthers===!0)
$allDropdowns.removeClass('open');window.clearTimeout(timeoutHover);$this.attr('aria-expanded','true');$parent.addClass('open');$this.trigger(showEvent)},settings.hoverDelay)}})};$(document).ready(function(){$('[data-hover="dropdown"]').dropdownHover()})})(jQuery,window)