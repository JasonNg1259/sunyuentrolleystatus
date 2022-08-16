<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href="main.css">
    </head>
    <body>
        <header>
            <?php
                include_once "php/config.php";
            ?>
        </header>
        <h1 style="text-decoration: underline; text-align: center;">Extrusion Trolley</h1>
        <div class="extrusion" style="
            margin-top: 30px;
            margin-left: 100px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            
            column-gap: 20px;
            row-gap: 40px;
        ">
            <!-- <button id="a1" ondblclick="changeColor()">A1</button>
            <button id="a2" ondblclick="changeColor()">A2</button>
            <button id="a3" ondblclick="changeColor()">A3</button>     
            <button id="a4" ondblclick="changeColor()">A4</button>
            <button id="a5" ondblclick="changeColor()">A5</button>
            <button id="a6" ondblclick="changeColor()">A6</button>
            <button id="a7" ondblclick="changeColor()">A7</button>
            <button id="a8" ondblclick="changeColor()">A8</button>

            <button id="b1" ondblclick="changeColor()">B1</button>

            <button id="c1" ondblclick="changeColor()">C1</button>
            <button id="c2" ondblclick="changeColor()">C2</button>
            <button id="c3" ondblclick="changeColor()">C3</button>     
            <button id="c4" ondblclick="changeColor()">C4</button>
            <button id="c5" ondblclick="changeColor()">C5</button>

            <button id="d1" ondblclick="changeColor()">D1</button>
            <button id="d2" ondblclick="changeColor()">D2</button>
            <button id="d3" ondblclick="changeColor()">D3</button>     
            <button id="d4" ondblclick="changeColor()">D4</button>
            <button id="d5" ondblclick="changeColor()">D5</button>
            <button id="d6" ondblclick="changeColor()">D6</button>
            <button id="d7" ondblclick="changeColor()">D7</button>

            <button id="h1" ondblclick="changeColor()">H1</button>
            <button id="h2" ondblclick="changeColor()">H2</button>
            <button id="h3" ondblclick="changeColor()">H3</button>     
            <button id="h4" ondblclick="changeColor()">H4</button>
            <button id="h5" ondblclick="changeColor()">H5</button>
            <button id="h6" ondblclick="changeColor()">H6</button>
            <button id="h7" ondblclick="changeColor()">H7</button>
            <button id="h8" ondblclick="changeColor()">H8</button>     
            <button id="h9" ondblclick="changeColor()">H9</button>
            <button id="h10" ondblclick="changeColor()">H10</button>
            <button id="h11" ondblclick="changeColor()">H11</button>
            <button id="h12" ondblclick="changeColor()">H12</button>
            <button id="h13" ondblclick="changeColor()">H13</button>     
            <button id="h14" ondblclick="changeColor()">H14</button>
            <button id="h15" ondblclick="changeColor()">H15</button>
            <button id="h16" ondblclick="changeColor()">H16</button>
            <button id="h17" ondblclick="changeColor()">H17</button>
            <button id="h18" ondblclick="changeColor()">H18</button>     
            <button id="h19" ondblclick="changeColor()">H19</button>
            <button id="h20" ondblclick="changeColor()">H20</button>
            <button id="h21" ondblclick="changeColor()">H21</button>
            
            <button id="i1" ondblclick="changeColor()">I1</button>
            <button id="i2" ondblclick="changeColor()">I2</button>
            <button id="i3" ondblclick="changeColor()">I3</button>     
            <button id="i4" ondblclick="changeColor()">I4</button>
            <button id="i5" ondblclick="changeColor()">I5</button>
            <button id="i6" ondblclick="changeColor()">I6</button>
            <button id="i7" ondblclick="changeColor()">I7</button>
            <button id="i8" ondblclick="changeColor()">I8</button>     
            <button id="i9" ondblclick="changeColor()">I9</button>
            <button id="i10" ondblclick="changeColor()">I10</button>

            <button id="j1" ondblclick="changeColor()">J1</button>
            <button id="j2" ondblclick="changeColor()">J2</button>
            <button id="j3" ondblclick="changeColor()">J3</button>     
            <button id="j4" ondblclick="changeColor()">J4</button>
            <button id="j5" ondblclick="changeColor()">J5</button>

            <button id="k1" ondblclick="changeColor()">K1</button>
            <button id="k2" ondblclick="changeColor()">K2</button>
            <button id="k3" ondblclick="changeColor()">K3</button>     
            <button id="k4" ondblclick="changeColor()">K4</button>-->
        </div>

        <h1 style="text-decoration: underline; text-align: center; margin-top: 50px;">Vulcanize Trolley</h1>
        <div class="vulcanize" style="
            margin-top: 30px;
            margin-left: 100px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            
            column-gap: 20px;
            row-gap: 40px;
        ">
            <!--<button id="va1" ondblclick="changeColor()">VA1</button>

            <button id="vb1" ondblclick="changeColor()">VB1</button>
            <button id="vb2" ondblclick="changeColor()">VB2</button>
            <button id="vb3" ondblclick="changeColor()">VB3</button>     
            <button id="vb4" ondblclick="changeColor()">VB4</button>
            <button id="vb5" ondblclick="changeColor()">VB5</button>

            <button id="vc1" ondblclick="changeColor()">VC1</button>
            <button id="vc2" ondblclick="changeColor()">VC2</button>
            <button id="vc3" ondblclick="changeColor()">VC3</button>     
            <button id="vc4" ondblclick="changeColor()">VC4</button>
            <button id="vc5" ondblclick="changeColor()">VC5</button>
            <button id="vc6" ondblclick="changeColor()">VC6</button>
            <button id="vc7" ondblclick="changeColor()">VC7</button>
            
            <button id="vd1" ondblclick="changeColor()">VD1</button>
            <button id="vd2" ondblclick="changeColor()">VD2</button>
            <button id="vd3" ondblclick="changeColor()">VD3</button>
            <button id="vd4" ondblclick="changeColor()">VD4</button>

            <button id="ve1" ondblclick="changeColor()">VE1</button>
            <button id="ve2" ondblclick="changeColor()">VE2</button>     
            <button id="ve3" ondblclick="changeColor()">VE3</button>

            <button id="vf1" ondblclick="changeColor()">VF1</button>
            <button id="vf2" ondblclick="changeColor()">VF2</button>
            <button id="vf3" ondblclick="changeColor()">VF3</button>     
            <button id="vf4" ondblclick="changeColor()">VF4</button>
            <button id="vf5" ondblclick="changeColor()">VF5</button>
            <button id="vf6" ondblclick="changeColor()">VF6</button>


            <button id="vg1" ondblclick="changeColor()">VG1</button>
            <button id="vg2" ondblclick="changeColor()">VG2</button>
            <button id="vg3" ondblclick="changeColor()">VG3</button>     
            <button id="vg4" ondblclick="changeColor()">VG4</button>
            <button id="vg5" ondblclick="changeColor()">VG5</button>
            <button id="vg6" ondblclick="changeColor()">VG6</button>
            
            <button id="vi1" ondblclick="changeColor()">VI1</button>
            <button id="vi2" ondblclick="changeColor()">VI2</button>
            <button id="vi3" ondblclick="changeColor()">VI3</button>     
            <button id="vi4" ondblclick="changeColor()">VI4</button>

            <button id="vj1" ondblclick="changeColor()">VJ1</button>
            <button id="vj2" ondblclick="changeColor()">VJ2</button>-->
        </div>

        <h1 style="text-decoration: underline; text-align: center; margin-top: 50px;">Splicing Trolley</h1>
        <div class="splicing" style="
            margin-top: 30px;
            margin-left: 100px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            
            column-gap: 20px;
            row-gap: 40px;
        ">

            <!--<button id="s46" ondblclick="changeColor()">S46</button>
            <button id="s16" ondblclick="changeColor()">S16</button>
            <button id="s42" ondblclick="changeColor()">S42</button>
            <button id="s13" ondblclick="changeColor()">S13</button>
            <button id="s30" ondblclick="changeColor()">S30</button>
            <button id="s27" ondblclick="changeColor()">S27</button>
            <button id="s36" ondblclick="changeColor()">S36</button>
            <button id="s29" ondblclick="changeColor()">S29</button>
            <button id="s44" ondblclick="changeColor()">S44</button>
            <button id="s31" ondblclick="changeColor()">S31</button>
            <button id="s47" ondblclick="changeColor()">S47</button>
            <button id="s14" ondblclick="changeColor()">S14</button>
            <button id="s34" ondblclick="changeColor()">S34</button>
            <button id="s43" ondblclick="changeColor()">S43</button>
            <button id="s33" ondblclick="changeColor()">S33</button>
            <button id="s23" ondblclick="changeColor()">S23</button>
            <button id="s35" ondblclick="changeColor()">S35</button>
            <button id="s18" ondblclick="changeColor()">S18</button>
            <button id="s28" ondblclick="changeColor()">S28</button>
            <button id="rf4" ondblclick="changeColor()">RF4</button>
            <button id="rf5" ondblclick="changeColor()">RF5</button>-->

        </div>


    </body>

    <script src="main.js"></script>
</html>