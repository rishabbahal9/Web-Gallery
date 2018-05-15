<img src="Images/blank.gif" style="max-width: 40%"/>
<!--Sticky header script start-->
<script>
window.onscroll = function() {myFunction()};

var heade = document.getElementById("navd");
var sticky = heade.offsetTop;

function myFunction() {
if (window.pageYOffset >= sticky) {
heade.classList.add("sticky");
} else {
heade.classList.remove("sticky");
}
}
</script>
<!--Sticky header script end-->

</body>
</html>
