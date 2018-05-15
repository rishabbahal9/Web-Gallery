<?php
include 'head_file.php';
 ?>

 <div id="content" class="container"><!--Content container-->


<?php
$var_prev='"p0.prev_img()"';
$var_next='"p0.next_img()"';
include 'box.php';
?>
<?php
$var_prev='"p1.prev_img()"';
$var_next='"p1.next_img()"';
include 'box.php';
?>

<?php
$var_prev='"p2.prev_img()"';
$var_next='"p2.next_img()"';
include 'box.php';
?>
<?php
$var_prev='"p3.prev_img()"';
$var_next='"p3.next_img()"';
include 'box.php';
?>

<?php
$var_prev='"p4.prev_img()"';
$var_next='"p4.next_img()"';
include 'box.php';
?>

<?php
$var_prev='"p5.prev_img()"';
$var_next='"p5.next_img()"';
include 'box.php';
?>

<?php
$var_prev='"p6.prev_img()"';
$var_next='"p6.next_img()"';
include 'box.php';
?>

<?php
$var_prev='"p7.prev_img()"';
$var_next='"p7.next_img()"';
include 'box.php';
?>

<?php
$var_prev='"p8.prev_img()"';
$var_next='"p8.next_img()"';
include 'box.php';
?>

<?php
$var_prev='"p9.prev_img()"';
$var_next='"p9.next_img()"';
include 'box.php';
?>

       <script>

                 var p0=new box(0,"隨機圖像","Random Images","&#x1f559; 4th January 2018",'Images/Random/1/',4);
                 p0.print();

                 var p1=new box(1,'隨機圖像','Random Images','&#x1f559; 4th January 2018','Images/Random/5/',3);
                 p1.print();

                 var p2=new box(2,'隨機圖像','Random Images','&#x1f559; 4th January 2018','Images/Random/6/',4);
                 p2.print();

                 var p3=new box(3,'隨機圖像','Random Images','&#x1f559; 4th January 2018','Images/Random/7/',1);
                 p3.print();

                 var p4=new box(4,'隨機圖像','Random Images','&#x1f559; 4th January 2018','Images/Random/8/',3);
                 p4.print();

                var p5=new box(5,"佩丽冉卡·曹帕拉","Priyanka Chopra","&#x1f559; 1st January 2018",'Images/priyanka_chopra/1/',24);
                p5.print();

                var p6=new box(6,'納吉絲·法赫利','Nargis Fakhri','&#x1f559; 2nd January 2018','Images/nargis_fakhri/1/',5);
                p6.print();

                var p7=new box(7,"晨妮","Chen Ni","&#x1f559; 1st January 2018",'Images/chen_ni/1/',7);
                p7.print();

                var p8=new box(8,'吕婉柔','Lv Wan Rou','&#x1f559; 3rd January 2018','Images/lv_wan_rou/1/',5);
                p8.print();

                var p9=new box(9,"你好 夏爾馬","Neha Sharma","&#x1f559; 2nd January 2018",'Images/neha_sharma/1/',5);
                p9.print();



                //Making Object type for box
                function box(n,chi_name,eng_name,date,display_src,n_img)
                {
                    this.n=n;//no. of box on the page
                    this.chi_name=chi_name;
                    this.eng_name=eng_name;
                    this.date=date;
                    this.display_src=display_src;//path of the first image
                    this.n_img=n_img;//no. of images
                    this.count=0;

                    this.print=printt;
                    this.next_img=nextt;
                    this.prev_img=prevv;


                }

                //declaring methods for box objects
                function printt()
                {
                  document.getElementsByClassName('ch_f_name')[this.n].innerHTML=this.chi_name;
                  document.getElementsByClassName('en_f_name')[this.n].innerHTML=this.eng_name;
                  document.getElementsByClassName('dated')[this.n].innerHTML=this.date;
                  document.getElementsByClassName('displaying_img')[this.n].src=(this.display_src+'1.jpg');
                  //document.getElementsByClassName('button1')[this.n].onclick=this.prev_img();
                  //document.getElementsByClassName('button2')[this.n].onclick=this.next_img;
                  //document.getElementsByClassName('button3')[this.n].onclick=this.prev_img;
                  //document.getElementsByClassName('button4')[this.n].onclick=this.next_img;
                }
                function nextt()
                {
                    document.getElementsByClassName('displaying_img')[this.n].src="Images/blank.gif";
					var arr_img=new Array(this.n_img);
                    var i=0;
                    for(i=0;i<this.n_img;i++)
                    {
                      arr_img[i]=this.display_src+(i+1)+'.jpg';
                    }

                    this.count++;
                    if(this.count>=this.n_img)
                    {
                      this.count=0;
                    }
					
                    document.getElementsByClassName('displaying_img')[this.n].src=arr_img[this.count];
                    document.getElementsByClassName('counting_img')[this.n].innerHTML=(this.count+1)+"/"+this.n_img;
                }

                function prevv()
                {
                  document.getElementsByClassName('displaying_img')[this.n].src="Images/blank.gif";
				  var arr_img=new Array(this.n_img);
                  var i=0;
                  for(i=0;i<this.n_img;i++)
                  {
                    arr_img[i]=this.display_src+(i+1)+'.jpg';
                  }

                  this.count--;
                  if(this.count<0)
                  {
                    this.count=this.n_img-1;
                  }
	
                  document.getElementsByClassName('displaying_img')[this.n].src=arr_img[this.count];
                  document.getElementsByClassName('counting_img')[this.n].innerHTML=(this.count+1)+"/"+this.n_img;
                }
       </script>
     </div><!--content container end-->

     </div><!--Outermost container end-->
<img src="Images/blank.gif" style="max-width: 40%"/>
<?php include 'footer.php';?>
