
//by click add -->get add form on the same page
/*
$(document).ready(function(){
$('#Mybtn').click(function(){
    //$("laiki_add.php").toggle(500);
$('#MyForm').toggle(500);
});
});

*/
$(document).ready(function() {
// SideNav Button Initialization
$(".button-collapse").sideNav2();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
var ps = new PerfectScrollbar(sideNavScrollbar);
});