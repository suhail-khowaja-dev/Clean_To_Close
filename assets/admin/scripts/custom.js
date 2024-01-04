/**
Custom module for you to write your own javascript functions
**/
var Custom = function() {

    // private functions & variables

    var myFunc = function(text) {
        alert(text);
    }

    // public functions
    return {

        //main function
        init: function() {
            //initialize here something.            
        },

        //some helper function
        doSomeStuff: function() {
            myFunc();
        }

    };

}();

/***
Usage
***/
//Custom.init();
//Custom.doSomeStuff();

$('.cleanerclss input[type=text],select').change((e) => {
    console.log('this is ', e.target.value)
})