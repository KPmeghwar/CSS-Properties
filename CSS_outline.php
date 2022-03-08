<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>.::CSS Properties::.</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="skyblue">

<!--Css Properties

  1.line Height
  2.Outline
  3. overflow 
  4.Length units (inches , centimeters ,milimeter ,points, picas, pixel)
  5.Cursor (auto , default ,none , progress ,wiat)
  6.Linear-Gradient
  7. Tab size
  8.Resize
  9.Transition
  10.Quotes
  11. Table Layout
  12.Caret Color
  13.Clip Path
  14.Filter
  15.font-kerning 
  16.Animation Property
  17.Background Origin
  18.Caption
  19.Font Feature setting
  20.Marker 
  21.Row gap
  22.Stroke
  23.Word break
  24.Writing mode
  25.Font variant neumeric
  26.Colum rule
  27.Mask Property
  28.Text align last
  29.Z-index
  30.Background Blend mode
-->

  

	<h1 style="color:red ;text-align: center;">USED CSS PROPERTIES</h1>
     <h4>1.Outline & Line Height</h4>  
     <p>

    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <hr/>
     <h4>3.Overflow Scroll</h4> 
     <div class="demo">You can use the overflow property when you want to have better control of the layout. The overflow property specifies what happens if content overflows an element's box.</div>
   
     <h4>4.Length Units</h4>

   <h1>Hidaya</h1>
   <h2>Hidaya</h2>
   <h3>Hidaya</h3>
   <h4>Hidaya</h4>
   <h5>Hidaya</h5>
   <h5>Hidaya</h6>
     
     <h4>5.Cursor</h4>
   <div class="cursor-demo">
   <span style="cursor: auto;">auto</span>
   <span style="cursor: default;">default</span>
   <span style="cursor: none;">none</span>
   <span style="cursor: help;">help</span>
   <span style="cursor: pointer;">pointer</span>
   <span style="cursor: progress;">progress</span>
   <span style="cursor: wait;">wait</span>
   </div>

   <h4>6.Linear-Gradient</h4>
   <ul>
   <li>Item 1</li>
   <li>Item 2</li>
   </ul>

    <h4>7. Tab size</h4>
   
    <pre>the value of size 4</pre>
    <h2>Non-resizable textarea</h2>

    <h4>8.Resize</h4>
    <form>
    <textarea>The resizability of this textarea is disabled.</textarea>
    </form>
    <h2>Resizable div</h2>
    <div>You can resize this div by dragging the bottom right corner.</div>

    <br/>
    <h4>9.Transitions</h4>   
    <button type="button">Place mouse on me</button>
    <br/>
    <q>Here is an example of <q>embedded</q> quotations.

    <br/>

    <h4>10.Quotes</h4>
    <table class="auto">
    <caption>Example 1. Auto</caption>
      <tr>
          <th>Name</th>
          <td>John Carter</td>
      </tr>
      <tr>
          <th>Email</th>
          <td>johncarter@mail.com</td>
      </tr>
    </table>

       <br>
       <h4>11.Table Layout</h4>
    <table class="fixed">
        <caption>Example 2. Fixed</caption>
        <tr>
            <th>Name</th>
            <td>Peter Parker</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>peterparker@mail.com</td>
        </tr>
    </table>

    <h4>12.caret color</h4>

    <input value="Default caret color"><br><br>

    <input class="example1" value="Custom caret color"><br><br>

    <input class="example2" value="Transparent caret color">

    <br>
    <h4>13.Clip Path</h4>
    <img src="img/str.gif" width="150px">

    <br>
    <h4>14.Filter</h4>
    <img src="img/pin.jpg" alt="Pin" width="300" height="300" class="image">

    
    <h4>15.Font-Kerning </h4>

    <div class="ex1">"STAY 'AWAY'"</div>
    <div class="ex2">"STAY 'AWAY'"</div>




    <h4>16.Animation Property</h4>

    Move an element from 0px to 200px left. The animation lasts for 5 seconds. It then starts over again, and go on forever (infinite).
    <div class="a"></div>

     <h4>17.Background Origin</h4>
     <h2>background-origin: padding-box (default):</h2>
    <div id="example1">
    <h2>Hello World</h2>
    The background image starts from the upper left corner of the padding edge.
    </div>

    <h2>background-origin: border-box:</h2>
    <div id="example2">
    <h2>Hello World</h2>
    The background image starts from the upper left corner of the border.
    </div>

    <h2>background-origin: content-box:</h2>
    <div id="example3">
    <h2>Hello World</h2>
    The background image starts from the upper left corner of the content.
    </div>

    <h4>18.Caption</h4>
    <h2>caption-side: bottom:</h2>
    <table id="two" border="1">
    <caption>Table 1.1 Customers</caption>
    <tr>
      <th>Company</th>
      <th>Contact</th>
      <th>Country</th>
    </tr>
    <tr>
      <td>Alfreds Futterkiste</td>
      <td>Maria Anders</td>
      <td>Germany</td>
    </tr>
    <tr>
      <td>Berglunds snabbköp</td>
      <td>Christina Berglund</td>
      <td>Sweden</td>
    </tr>
    <tr>
      <td>Centro comercial Moctezuma</td>
      <td>Francisco Chang</td>
      <td>Mexico</td>
    </tr>
    <tr>
      <td>Ernst Handel</td>
      <td>Roland Mendel</td>
      <td>Austria</td>
    </tr>
    </table>

    <h2>caption-side: top (default):</h2>
    <table id="one" border="1">
    <caption>Table 1.1 Customers</caption>
    <tr>
      <th>Company</th>
      <th>Contact</th>
      <th>Country</th>
    </tr>
    <tr>
      <td>Alfreds Futterkiste</td>
      <td>Maria Anders</td>
      <td>Germany</td>
    </tr>
    <tr>
      <td>Berglunds snabbköp</td>
      <td>Christina Berglund</td>
      <td>Sweden</td>
    </tr>
    <tr>
      <td>Centro comercial Moctezuma</td>
      <td>Francisco Chang</td>
      <td>Mexico</td>
    </tr>
    <tr>
      <td>Ernst Handel</td>
      <td>Roland Mendel</td>
      <td>Austria</td>
    </tr>
    </table>
    <br/>

    <h4>19.Font-Feature</h4>
    <div class="element" style="font-feature-settings: &quot;dlig&quot;;">
    We are learning the properties of fonts.
    </div>


      <h4>20.Marker</h4>
      <svg>
      <marker id="Triangle" viewBox="0 0 10 10" refX="0" refY="5" orient="auto">
      <path d="M 0 0 L 10 5 L 0 10 z"></path>
      </marker>
      <g class="arrowBody" style="marker: none;">
      <path d="M 100,75 C 125,50 150,50 175,75"></path>
      </g>
      </svg>

      <h4>21.Row Gap</h4>
      <div class="element" style="row-gap: normal;">
      <div class="item1">
      item1
      </div>
      <div class="item2">
      item2
      </div>
      <div class="item3">
      item3
      </div>
      </div>

      <h4>22.Stroke</h4>
      <svg viewBox="0 0 1200 400">
      <circle cx="600" cy="200" r="100" class="child" style="stroke: currentcolor;"></circle>
      </svg>

      <h4>23.Word Break</h4>
      <div class="word" style="word-break: normal;">
      这是一些汉字 and some Latin و کمی خط عربی และตัวอย่างการเขียนภาษาไทย
      </div>
      <br/>

      <h4> 24.Writing Mode</h4>
      <div class="write" style="writing-mode: horizontal-tb;">
      It is representing the direction of text.
      </div>

      <br>
      <h4> 25.Font Variant Neumeric</h4>
      <div class="varNumeric">
      409,280 2 1/3
      </div>


      <br/>

      <h4> 26.Column Rule</h4>
      <div class="column" style="column-rule: medium none currentcolor;">
      column count represents the number of columns and distributes the content among those columns
      </div>

      <br/>
      <h4>27.Mask Property</h4>
      <div class="mask" style="mask-clip: border-box;">
      CSS mask-clip property specifies the area affected by the mask
      </div>
      <br/>

      <h4>28.Text Align Last</h4>
      <div class="element1" style="text-align-last: start;">
      We are observing the behavior of text align last property for different values.
      </div>

      <br/>
      <h4>29.Z-index</h4>
      <div class="box1" style="z-index: auto;">
      box1
      </div>
      <div class="box2">
      box2
      </div>
      <br/>
      
      <h4>30.Counter reset</h4>

      <h2>HTML Tutorial</h2>
      <h2>CSS Tutorial</h2>
      <h2>JavaScript Tutorial</h2>
      <h2>Bootstrap Tutorial</h2>
      <h2>SQL Tutorial</h2>
      <h2>PHP Tutorial</h2>

       </body>
      </html>