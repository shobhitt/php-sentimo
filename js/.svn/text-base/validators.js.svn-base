jQuery.extend(jQuery.validator.messages, {
    required: "This field is required.",
    remote: "Record already exist.",
    email: "Please enter valid email address.",
    url: "Please enter valid URL.",
    date: "Please enter valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    minlength: jQuery.validator.format("Please enter at least {0} characters."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});


jQuery.validator.addMethod("regex", function(value, element, param) {
 
	//if(value == "") return true;
	return value.match(new RegExp("^" + param + "$"));
},"Only alphabetic characters allowed");


jQuery.validator.addMethod("inphone", function(value, element, param) {
	 
	//if(value == "") return true;
   var length = value.length + $('#pcode').val().length;
   
   return length == 11;
},"Invalid phone number");



jQuery.validator.addMethod("maxWords", function(value, element, params) { 
    return this.optional(element) || value.match(/\b\w+\b/g).length < params; 
}, $.format("Please enter {0} words or less.")); 
 
jQuery.validator.addMethod("minWords", function(value, element, params) { 
    return this.optional(element) || value.match(/\b\w+\b/g).length >= params; 
}, $.format("Please enter at least {0} words.")); 
 
jQuery.validator.addMethod("rangeWords", function(value, element, params) { 
    return this.optional(element) || value.match(/\b\w+\b/g).length >= params[0] && value.match(/bw+b/g).length < params[1]; 
}, $.format("Please enter between {0} and {1} words."));


jQuery.validator.addMethod("letterswithbasicpunc", function(value, element) {
        return this.optional(element) || /^[a-z-.,()'\"\s]+$/i.test(value);
}, "Letters or punctuation only please");  

jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^\w+$/i.test(value);
}, "Letters, numbers, spaces or underscores only please");  

jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 

jQuery.validator.addMethod("nowhitespace", function(value, element) {
        return this.optional(element) || /^\S+$/i.test(value);
}, "No white space please");


/*jQuery.validator.addMethod("mobile", function(value, element, param) {
	 
	//if(value == "") return true;
   var length = value.length + $('#pcode').val().length;
   
   return length == 11;
},"Invalid Mobile number");*/


jQuery.validator.addMethod("rupee",function(n,element,param)
{
	return !isNaN(parseFloat(n)) && isFinite(n);

},"Please enter ammount correctly");


$.validator.setDefaults({
	  // debug: true,
	   ignore:"input[autocomplete='off']",
	   messages:{remote:"Already in use"}
	});

//Positive number validator
$.validator.addMethod('positiveNumber',
	    function (value) { 
	        return Number(value) > 0;
	    }, 'Enter a positive number.');