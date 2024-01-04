<body oncontextmenu="return false;" ></body>
<div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="<?=base_url().'admin'?>" class="logo" ><?=$config['admin_title']?><span> Admin Panel</span></a>
          <!--logo end-->
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <img style="max-width:75px;background:black;" alt="" src="<?=$config['admin_images_root'];?>logo.png">
                      <span class="username"><?ucfirst($this->session_data['username']);?></span>
                      <b class="caret"></b>
                    </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="<?echo site_url("admin/logout")?>"><i class="icon-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
          
          <script>
/** 
 * Disable right-click of mouse, F12 key, and save key combinations on page 
 */ 
 document.addEventListener("contextmenu", function(e){ 
 e.preventDefault(); 
 }, false); 
 document.addEventListener("keydown", function(e) { 
 //document.onkeydown = function(e) { 
 // "I" key 
 if (e.ctrlKey && e.shiftKey && e.keyCode == 73) { 
 disabledEvent(e); 
 } 
 // "J" key 
 if (e.ctrlKey && e.shiftKey && e.keyCode == 74) { 
 disabledEvent(e); 
 } 
 // "S" key + macOS 
 if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) { 
 disabledEvent(e); 
 } 
  // "I" key for mac 
 if (e.keyCode == 73 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) { 
 disabledEvent(e); 
 } 
  // "U" key for mac
  if (e.keyCode == 85 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) { 
 disabledEvent(e); 
 } 
 
 // "U" key 
 if (e.ctrlKey && e.keyCode == 85) { 
 disabledEvent(e); 
 } 
 // "F12" key 
 if (event.keyCode == 123) { 
 disabledEvent(e); 
 } 
 // "C" key 
 if (e.ctrlKey && event.keyCode == 67) { 
 disabledEvent(e); 
 } 
 }, false); 
 function disabledEvent(e){ 
 if (e.stopPropagation){ 
 e.stopPropagation(); 
 } else if (window.event){ 
 window.event.cancelBubble = true; 
 } 
 e.preventDefault(); 
 return false; 
 }
// document.onkeydown = function(e)
//     {
//         if(event.keyCode == 123)
//         {
//             return false;
//         }
//         if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0))
//         {
//             return false;
//         }
//         if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0))
//         {
//             return false;
//         }
//         if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))
//         {
//             return false;
//         }
//     if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0))
//     {
//       return false;
//     }
//     if(event.command == "\u2318")
//     {
//       return false;
//     }
//     }
//  $(window).on('keydown',function(event)
//     {
//     if(event.keyCode==123)
//     {
//         // alert('Entered F12');
//         return false;
//     }
//      else if(event.ctrlKey && event.keyCode == 85){
//         return false;
//         }
//     else if(event.ctrlKey && event.shiftKey && event.keyCode==73)
//     {
//         // alert('Entered ctrl+shift+i')
//         return false;  //Prevent from ctrl+shift+i
//     }
//     else if(event.ctrlKey && event.keyCode==73)
//     {
//         // alert('Entered ctrl+shift+i')
//         return false;  //Prevent from ctrl+shift+i
//     }
//     else if(event.alt && event.cmd && event.keyCode == 73){
//         return false;
//     }
// });
// $(document).on("contextmenu",function(e)
// {
// // alert('Right Click Not Allowed')
// e.preventDefault();
// });
</script>