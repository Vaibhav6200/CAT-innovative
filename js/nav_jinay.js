// const navLinks = Array.from(document.getElementsByClassName('link'));
// console.log(typeof(navLinks));
// const contents = document.querySelectorAll('.container > div');
// const simulator= document.getElementById('simulator');
// const dropdownMenu = document.getElementById('simulator_menu');
// const links=document.querySelectorAll('#simulator_menu > ul> li >a');
// const contents2 = Array.from(document.querySelectorAll('.container_2 > div'));
// console.log(navLinks);
// console.log(contents);
// console.log(links);
// console.log(contents2);
// contents.forEach(content => {
//   content.style.display = 'none';
// });
// contents2.forEach(content=> {content.style.display='none';});
// var tmp_index= <?php echo $_SESSION['index'];?>;
// if(tmp_index<7)contents[tmp_index].style.display='block';
// else contents2[tmp_index-7].style.display='block';
// dropdownMenu.style.display = 'none';
// navLinks.forEach((link, index) => {
//   link.addEventListener('click', (event) => {

//     event.preventDefault();
//     console.log(link);
//     dropdownMenu.style.display = 'none';
//     contents.forEach(content => {
//         content.style.display = 'none';
//     });
//     contents2.forEach(content =>{
//         content.style.display='none';
//     });
//     contents[index].style.display = 'block';
//     console.log(index);


//     $.ajax({
//         url: 'set_index.php',
//         type: 'POST',
//         data: { index: index  },
//         success: function(response) {
//         }
//     });

//   });
// });
// simulator.addEventListener('click',(event) => {
//     dropdownMenu.style.display = 'block';
//     contents.forEach(content => {
//         content.style.display = 'none';
//     });

//   });

//   links.forEach((link,index)=>{
//     console.log(link);
//     link.addEventListener('click', (event) => {
//     event.preventDefault();
//     contents.forEach(content => {
//         content.style.display = 'none';
//     });
//     contents2.forEach(content =>{
//         content.style.display='none';
//     });

//     contents2[index].style.display = 'block';
//     console.log(index);
//     console.log(contents2[index]);
//     $.ajax({
//         url: 'set_index.php',
//         type: 'POST',
//         data: { index: index +8},
//         success: function(response) {
//         }
//     });

// });
//   });
