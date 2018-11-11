import $ from 'jquery';
window.$ = $;

$(document).foundation();
//import Foundation from 'foundation-sites';

import './lib/foundation-explicit-pieces';
import './lib/custom';


// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';



// closes accordion once "APPLY" button is clicked
$("button.apply").click(function() {
    $('.accordion').foundation('up', $('.accordion-content'));
});

