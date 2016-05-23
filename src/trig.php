<?php
  include("globalfunctions.php");

  startHeader();

  endHeader();
?>
     <div class=title>
         Trig and Math!</div>
         <p></p>

     <div class=contentHeader>
      About this article
     </div>
     <div class=content>
      This article is being written in the hopes of both furthering my understanding of all these identities, and also others'
      understanding.  I'm going to write these things out in as plain English as I can muster, so bear with me.  I will be following
      chapter 6 in Calculus: A First Course so I don't stray too far from the topic at hand.  Alas, let's dive in!
     </div><p></p>

     <div class=contentHeader>
      Trig basics
     </div>
     <div class=content>
      Let's start off with some of the basics.  We're going to be working a lot with the math functions sine, cosine, and
      tangent, usually written as: sin, cos, and tan respectively.  These functions have a lot of special properties, and tons
      of identities, so it's basically something you have to memorize or you're stuck.  Anyway, let's start off with the basics.<p>

      Here's the basic graphs:<br><center>
      sin(x) <img align=middle src="images/trig/sin.gif" alt="sin">
      cos(x) <img align=middle src="images/trig/cos.gif" alt="cos"><p></p>
      tan(x) <img align=middle src="images/trig/tan.gif" alt="tan"></center>

      <p></p>

      To modify these graphs, there's some basic rules to follow.<br>
<pre>f(x)+c - Shift up
f(x)-c - Shift down
f(x+c) - Shift left
f(x-c) - Shift right</pre>

      <p></p>
      More visibly noted by (black is original <i>sin(x)</i>):<p></p><center>
      sin(x)+1 <img align=middle src="images/trig/sin(x)+1.gif" alt="sin(x)+1">
      sin(x)-1 <img align=middle src="images/trig/sin(x)-1.gif" alt="sin(x)-1"><p></p>
      sin(x+1) <img align=middle src="images/trig/sin(x+1).gif" alt="sin(x+1)">
      sin(x-1) <img align=middle src="images/trig/sin(x-1).gif" alt="sin(x-1)"></center>

      <p></p>

      There are other ways to modify the graphs of course, for example: shrinking, expanding and reflecting.<br>
      These example all fall under the following formula: <i>af(x)</i><br>
<pre>a>1    - expand in y direction (get taller)
0&lt;a&lt;1  - shrink in y direction (get shorter)
-1&lt;a&lt;0 - shrink in y direction and flip over x axis
a&lt;01   - expand in y direction and flip over x axis</pre>

      <p></p>

      As we can see, a negative a value will flip the graph across the x-axis (horizontally). There are also ways to
      shrink and expand the graph in the x direction (examples using <i>f(ax)</i>)<br>
<pre>a>1   - shrink in x direction
0&lt;a&lt;1 - expand in x direction</pre>

      <p></p>

      Visible representations:<p></p><center>
      2*sin(x) <img align=middle src="images/trig/2sin(x).gif" alt="2sin(x0">
      1/2*sin(x) <img align=middle src="images/trig/halfsin(x).gif" alt="1/2sin(x)"><p></p>
      -2*sin(x) <img align=middle src="images/trig/neg2sin(x).gif" alt="-2sin(x)">
      -1/2*sin(x) <img align=middle src="images/trig/neghalfsin(x).gif" alt="-1/2sin(x)"><p></p>
      sin(4x) <img align=middle src="images/trig/sin(4x).gif" alt="sin(4x)">
      sin(1/2*x) <img align=middle src="images/trig/sin(halfx).gif" alt="sin(1/2x)"></center>

     </div><p></p>

     <div class=contentHeader>
      Trig ratios
     </div>
     <div class=content>
      Alright, so that's the basic stuff.  To do identities we first need to memorize two right triangles: the
      1 2 3 triangle and the 1 2 1 triangle as I call them.  Here is a graphical representation of these triangles:<p></p><center>
      <img align=middle src="images/trig/123.gif" alt="123 triangle">  <img align=middle src="images/trig/121.gif" alt="121 triangle"></center>

      <p></p>

      It would be a very wise idea to memorize these triangles inside and out as you'll be using them to solve trig
      identities all the time.  As long as you can draw the triangles out on paper you should be fine, and then that's just
      one step closer to having the relations memorized.<br>
      If you have trouble memorizing these triangles, I found it easier to give them names in a specific order.  I named them
      based on the widths of the sides and then it is just a matter of memorizing &pi;/3, &pi;/6, and &pi/4.

      <p></p>

      Next, the ratios that you <b>must</b> memorize are the following:<br>
<pre>sin(&theta;) - opposite/hypotenuse
cos(&theta;) - adjacent/hypotenuse
tan(&theta;) - opposite/adjacent</pre>
      These are more easily remembered by the phrase: SOHCAHTOA which sounds kinda like Sacagawea if you know any history about
      Lewis and Clark.  Anyway, the acronym stated is what you use for remembering which ratios go to which trig functions.

      <p></p>

SOH- <font color="#ff0000">s</font>in(&theta;) - <font color="#ff0000">o</font>pposite/<font color="#ff0000">h</font>ypotenuse<br>
CAH- <font color="#ff0000">c</font>os(&theta;) - <font color="#ff0000">a</font>djacent/<font color="#ff0000">h</font>ypotenuse<br>
TOA- <font color="#ff0000">t</font>an(&theta;) - <font color="#ff0000">o</font>pposite/<font color="#ff0000">a</font>adjacent

      <p></p>

     </div><p></p>
<?php
  endBody();
?>