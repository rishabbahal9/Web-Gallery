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


       <script>

                p0=new box(0,'納吉絲·法赫利','Nargis Fakhri','&#x1f559; 2nd January 2018','Images/nargis_fakhri/1/',5);
                p0.print();

                var p1=new box(1,'納吉絲·法赫利','Nargis Fakhri','&#x1f559; 2nd January 2018','Images/nargis_fakhri/2/',3);
                p1.print();

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
	 
<?php include 'footer.php';?>
