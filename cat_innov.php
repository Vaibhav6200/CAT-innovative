<?php
    session_start();
    include 'connect.php';
    if(!isset($_SESSION['index'])){
        $_SESSION['index']=0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css' integrity='sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' integrity='sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB' crossorigin='anonymous'>
    <link rel='stylesheet' href='css/styles.css'>
    <link rel="stylesheet" href="ChemDoodleWeb-9.5.0/install/ChemDoodleWeb.css" type="text/css">
    <script type="text/javascript" src="ChemDoodleWeb-9.5.0/install/ChemDoodleWeb.js"></script>

    <link rel="stylesheet" href="ChemDoodleWeb-9.5.0/install/uis/jquery-ui-1.11.4.css" type="text/css">
    <script type="text/javascript" src="ChemDoodleWeb-9.5.0/install/uis/ChemDoodleWeb-uis.js"></script>
    <script src="https://kit.fontawesome.com/2efec525ec.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/cat_inn.css">
    <link rel="stylesheet" href="css/simulator.css">
</head>
<body>

  <div class="content">


  <div class="navbar">

    <ul>

      <li ><a id="home" class="link zoom" href="#">Home</a></li>
      <li><a id="theory" href="#" class="link zoom" >Theory</a></li>
      <li><a id="procedure" href="#" class="zoom" >Procedure</a></li>
      <li><a id="quiz" href="#" class="link zoom" >Quiz</a></li>
      <li><a id="self_evaluation" href="#" class="link zoom" >Self evaluation</a></li>
      <li><a id="assignment" href="#" class="link zoom" >Assignment</a></li>
      <li><a id="reference" href="#" class="link zoom" >Reference</a></li>
      <?php
        if($_SESSION['admin'])echo '<li><a id="add_ques" href="#" class="link">Add quiz question</a></li>';
      ?>
      <li id="simulator">
        <a href="#" class="zoom">Simulator</a>
        <div id=simulator_menu>
        <ul>
            <li><a href="#" onclick="simulation1();">Option 1</a></li>
            <li><a href="#" onclick="simulation2();">Option 2</a></li>
        </ul>
        </div>
      </li>
    </ul>

  </div>




  <iframe id="hidden-iframe" style="display:none;"></iframe>

    <div class="container">
      <div class="home">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nostrum nemo doloribus, autem eum aspernatur pariatur, omnis ipsam animi qui unde minima earum ea minus quaerat mollitia ex maiores nam repellat dicta saepe a, culpa nulla dignissimos? Vel est expedita totam asperiores repellendus dicta temporibus veniam repudiandae voluptatum, dolorum odio illum, quis error? A similique, animi ut dolores, repellat debitis necessitatibus voluptas nihil voluptates, dignissimos unde vitae pariatur sint aperiam molestias commodi quis eius! Quisquam eveniet expedita molestias repudiandae sequi, omnis ratione. Vitae voluptate cupiditate quam enim, quos, odit dicta assumenda ullam neque autem omnis nesciunt veritatis quo quas fugiat? Nobis nostrum quae ex pariatur. Mollitia maxime doloremque impedit, nobis dolorum similique magnam consequuntur, ea unde ut eum quod tempore? Adipisci consectetur non provident dicta optio animi ex cupiditate accusamus eligendi repellat labore cum repellendus et dignissimos aperiam iusto voluptatem veniam illo cumque vitae, amet pariatur fuga dolor quod. Eos excepturi rem, est possimus neque labore mollitia quidem harum, fuga sit vero totam iure odio, eaque commodi voluptates ducimus. Nobis rem ab tempore, obcaecati deleniti accusamus molestiae? Quia nostrum pariatur vero nemo recusandae. Qui laudantium, dolores blanditiis voluptates voluptas harum numquam recusandae labore illo sit aperiam? Asperiores odio quod similique voluptatum adipisci, ea placeat! Perferendis voluptates quisquam illum voluptate nesciunt, voluptas ratione neque similique sed sit porro ipsum sint reprehenderit inventore nemo quaerat repellendus fugit quam, nobis, deserunt explicabo. Soluta nam voluptates eveniet neque atque. Provident pariatur ipsum ab sapiente nobis nostrum, atque eligendi dolorum rerum cum sit recusandae modi excepturi voluptatem repellendus optio. Quos quibusdam quod tenetur voluptates voluptatibus ratione iste, consectetur vero minus unde dolorem optio ipsa iusto ea sed eius adipisci quisquam, recusandae aperiam nisi? Quibusdam quae accusantium nihil eos quaerat corrupti veritatis dicta, magni soluta eveniet impedit facilis reprehenderit aliquid velit harum odit sit esse, deleniti fuga! Voluptatibus at necessitatibus, saepe quae repellat natus veniam, quia repudiandae beatae, dolorem magnam. Laborum itaque ullam dolorem maiores quia totam perspiciatis, quas, modi natus provident similique quo? Animi eveniet ipsum explicabo praesentium amet tenetur necessitatibus dicta deserunt nobis deleniti ipsam ad impedit assumenda reprehenderit soluta omnis doloremque, culpa harum similique magnam iste quod possimus officiis! Illo velit quasi, quod minima officiis perspiciatis optio. Illo ducimus sunt error ut exercitationem cum aliquam vitae voluptatibus saepe quae ipsum iste dolorum, itaque similique, ab perspiciatis animi reiciendis autem eos necessitatibus. Dolorem nostrum natus rerum consequuntur necessitatibus voluptatibus impedit laboriosam unde harum labore aliquam facilis, nulla magnam sint a repudiandae hic debitis vel amet. Atque excepturi nam dicta. Non tempora provident numquam possimus minima molestiae similique beatae dolorem alias vero obcaecati dignissimos deserunt sunt at maiores voluptas repudiandae voluptatibus eos veritatis, est cum quasi velit, labore voluptates. Officiis culpa ratione suscipit vitae dolore facilis minima debitis, veritatis consectetur blanditiis fuga hic, doloremque vero obcaecati voluptas molestiae minus laudantium voluptate quo saepe deleniti dolorem! Culpa molestias quaerat numquam omnis, animi id, eius sed itaque quod iusto dignissimos asperiores. Illo, perspiciatis maxime. Nostrum perspiciatis quidem odio perferendis vitae reprehenderit id, optio ut quaerat maiores qui?
      </div>

      <div class="theory">
      <div>

<h1 class="header">Theory</h1>
<h3>Objective:</h3>
<ul style="text-align:center; margin-bottom:20px;">
    <li>
        To familiarise the 3D geometry of various molecules.
    </li>
    <li>
        To determine the point groups.
    </li>
</ul>

<h3>Introduction:</h3>
<p >The symmetry relationships in the molecular structure provide the basis for a mathematical theory, called group theory. The mathematics of group theory is predominantly algebra. Since all molecules are certain geometrical entities, the group theory dealing with such molecules is also called as the ‘algebra of geometry’.</p>

<h3>Symmetry Element:</h3>
<p>A symmetry element is a geometrical entity such as a point, a line or a plane about which an inversion a rotation or a reflection is carried out in order to obtain an equivalent orientation.</p>

<h3>Symmetry Element:</h3>
<p>A symmetry operation is a movement such as an inversion about a point, a rotation about a line or a reflection about a plane in order to get an equivalent orientation.
<br>The various symmetry elements and symmetry operations are listed in below table.</p><br>

<img src="uploads/t1.png" alt="">

<h3>Centre of symmetry:</h3>
<p>A point in the molecule from which lines drawn to opposite directions will meet similar points at exactly same distance. Some of the molecules, which have a centre of symmetry, are:N2F2, PtCl4, C2H6</p><br>

<img src="uploads/t2.png" alt="">

<p>The broken line in the σ- plane. If we look from left side (A) into the mirror plane, HA appears to have gone on the other side and its image appears exactly at HB. Similarly viewing the structure of H2O molecule from the right side (B), the reflection of HB appears at HA configuration II is the result of this reflection operation and is equivalent to I. Another round of this operation on the molecule (configuration II) yields configuration III which is identical to configuration I.</p>


<h3>Proper Axis of symmetry:</h3>
<p>An axis passing through the molecule about which when the molecule is rotated 360/n an equivalent orientation is produced. This is an axis of n-fold symmetry or an axis of order as shown below:
H2O, N2H3, BF3</p>

<img src="uploads/t3.png" alt="">

<p>Initially, H2O molecule is in configuration I, lying flat on the plane of the paper , and after rotating it through an angle θ = 1800 about an axis passing through O atom (Z-axis) and having HOH angle, the configuration II will be obtained. The configuration II is equivalent to configuration I, but not identical. By another similar rotation about Z-axis on configuration II, the molecule goes into configuration III. Here configuration III is identical to the initial or original configuration I. </p>


<h3>Principle Axis:</h3>
<p>If there is more than one axis of symmetry, in many cases one of the axes is identified as principal axis, which will be selected in the following order:</p>

<ul>
    <li>The only axis </li>
    <li>The highest order axis</li>
    <li>The axis passing through maximum number of atoms</li>
    <li>The axis perpendicular to the plane of the molecule</li>
</ul>
<p>The principal axis is taken as the vertical axis that is in the z-direction. The subsidiary axis is perpendicular to the principal axis and will, hence, be in the horizontal direction.</p>
<img src="uploads/t4.png" alt="">
<p>The plane of symmetry is also classified on the basis of the principal axis. The planes including or involving the principal axis are called vertical planes (σv) and the planes perpendicular to the principal axis is called horizontal plane (σh).</p>
<img src="uploads/t5.png" alt="">

<h3> Improper Axis of symmetry:</h3>
<p>An axis passing through the object about which when the object is rotated through 360/n followed by reflection in a plane perpendicular to the axis produces an equivalent orientation.
For example ethane molecule (staggered form).</p>


<p>Configuration I and II are not equivalent i.e., θ = 600 and the consequence C6 – rotational operation is not a valid symmetry operation by itself. Similarly, II and III are not equivalent, thus showing that σ operation perpendicular to the so called C6 rotational axis is also not a genuine symmetry operation. But the configurations I and III are equivalent, so that C6 followed by σ perpendicular to C6 is a genuine, through the combined operation this product operation results in an element called S6 axis.</p>
<img src="uploads/t6.png" alt="">

<h3> Identity Element:</h3>
<p>This element is obtained by an operation called identity operation. After this operation, the molecule remains as such. This situation can be visualized by two ways. Either</p>
<ul>
    <li>
        We rotate the molecule by 3600.
    </li>
    <li>
        We do not do anything on the molecule or
    </li>
</ul>
<img src="uploads/t7.png" alt="">

<p>Every molecule has this element of symmetry and it co-exists with the identity of the molecule, hence the name identity element.</p>


<h3>Point group:</h3>
<p>The symmetry elements can combine only in a limited number of ways and these combinations are called the point groups.

</p>

<h3>Nomenclature of the point group:</h3>
<p>
<li>There are certain conventions developed by two schools of thought for naming these point groups.</li>
<li>The Schoenflies nomenclature is popularly used molecular point groups than that of Hermann-Mauguin.</li>
<li>Crystal and space groups are named after Hermann-Mauguin symbolism.</li>
<li>H2O and pyridine are assigned the point group symbol-C2v which means the molecules contain a C2 axis and 2 σv planes.</li></p>

<h3>Identification of molecular point groups:</h3>
<p>The whole molecules are divided into three broad categories.
<ul>
    <li>Molecules of low symmetry (MLS).</li>
    <li>Molecules of high symmetry (MHS).</li>
    <li>Molecules of special symmetry (MSS).</li>
</ul>
</p>


<h3>Molecules of Low Symmetry (MLS):</h3>
<p>The starting point could be the molecules containing no symmetry elements other than E, such molecules are unsymmetrically substituted and these molecules are said to be belongs to C1 point group.



    The TeCl2Br2 molecules with its structure in gaseous phase belongs to C1 point group, and tetrahedral carbon and silicon compounds of the formula AHFClBr (A=C,Si).</p>


<h3> Molecules of High Symmetry (MHS):</h3>
<p>In this category all the molecules containing Cn axis (invariably in the absence or presence of several other types of symmetry of elements) are considered. There are three main types of point groups Cn, Dn, and Sn.</p>
<h3> Cn type point group:</h3>
<p>
    <p>
    <li>Cn point groups:</li>
    The molecules which contain only one Cn, proper axis are considered. The presence of Cn implies the presence of (n-1) distinct symmetry elements whether n is even or odd. Since Cn generates a set of n elements including E, the order of this group is n, (h=n) the molecules belonging this group are designated as Cn point groups.
    <img src="uploads/t8.png" alt="">
    </p>

    <p>
    <li>Cnv point groups:</li>
    This group contains a Cn axis and n σv planes of symmetry. When n is odd, all the planes are σv type only, and if n is even, there are n/2 planes of σv type.
    <img src="uploads/t9.png" alt="">
    </p>

    <p>
    <li>Cnh point groups:</li>
    This set of point group can by adding a horizontal plane (σh) to a proper rotational axis, Cn. This group has a total of 2n elements –n elements from Cn and other n elements can be generated by a combination of Cn and σh, leading to the corresponding Sn axes. When n is even, Cnh point group molecules necessarily contains a centre of inversion, i.
    <img src="uploads/t10.png" alt="">
    </p>
</p>

<h3> Dn type point groups:</h3>
<p>
    <p>
    <li>Dn type point groups:</li>
    These are purely rotational groups that are they contain only rotational axis of symmetry. When the molecule containing only one type Cn axis, it was classified as Cn point group. if in addition to one the Cn  axis, a set of n Cn  axes perpendicular to Cn  are added, it belongs to another point group called Dn point group. The order, h, of this rotational group is 2n, since Cn generates (n-1)+E elements and the number of C2s are n more. For example gauche or skew form of ethane contains D3 point group.
    <img src="uploads/t11.png" alt="">
    </p>

    <p>
    <li>Dnh point groups:</li>
    This point group can be obtained by adding a horizontal (σh) plane to a set of Dn group elements. The order of this Dnh group is 4n. In addition to the n elements of Cn when n is even, the elements generated are quite distinct and different from what has already been obtained. However when n is odd, we get set of n elements based on Sn axis.Example is -  B2H6 - D2h
    <img src="uploads/t12.png" alt="">
    </p>

    <p>
    <li>Dnd point group:</li>
    This point group can be obtained by adding a set of dihedral planes (nσd) to a set of Dn group elements. This would thus require that there is a Cn proper axis along with nC2 s perpendicular to Cn axis and nσd planes, constituting a total of 3n elements thus far.Example is - Cyclohexane (chair form) - D3d
    <img src="uploads/t13.png" alt="">
    </p>
</p>
</p>
<h3>Sn type point groups:</h3>
<p>Sn axis is the only group generator for the Sn (n= even) point group of molecules. The point groups Cnh, Dnh, and Dnd .when n is odd, the presence of Sn axis implies the presence of 2n elements, in which a plane of symmetry (σ) makes an independent appearance. Thus the presence of a plane perpendicular to Cn or Sn axis and other additional elements would lead to the other point group such as Cnh , Dnh ,or Dnd when n is even and there is no plane perpendicular (σh ) to this axis, the presence of other elements in addition to Sn axis leads to only Dnd point group.
Example is - SiO4(CH3)4 - S4
<img src="uploads/t14.png" alt="">
</p>

<h3> Point Groups and their Detailed List of Symmetry  Elements are Included in the Below Table.</h3>
<img src="uploads/t15.png" alt="">
<img src="uploads/t16.png" alt="">

<h3>Molecules of special Symmetry:</h3>
<p>
This class has two groups of molecules:
<ul>
    <li>Linear or infinite groups and</li>
    <li>Groups which contain multiple higher-order axes.</li>
    <li><b>Linear or infinite groups:</b>In addition to all the linear molecules, circle-shaped and cone-shaped ones also belong to this category. These can be further sub-divided into two groups, C∞v and D∞v groups, the presence or absence of i used to distinguish between these two types of groups.</li>
    <li><b>C∞v point group:</b>This group can be defined the same way as that of Cnv group, where n is infinity. The C∞ axis lies along the inter nuclear molecules, and since the molecule is linear the σv planes are infinite in number. The order of this group is h = ∞. All hetero nuclear molecules, and all unsymmetrically substituted linear polyatomic molecules are belongs to this point group. Examples are HX (X = F, Cl, Br, I), CO, NO, CN etc. </li>
    <li><b>D∞v point group:</b>This group is an extension of Dnh group (∞). This group of molecules contain a C∞ axis, ∞C2 axes perpendicular to C∞ axis and a σh plane. Then, it would also imply that the molecule possess ∞σv planes and a centre of inversion(i). So all centre of symmetric molecules are belongs to this point group.Homo nuclear diatomic molecules such as N2, O2 , H2 , F2  and Cl2 etc.</li>
 </ul>
 </p>

 <h3>Molecules Containing Multiple Higher-Order Axes:</h3>
 <p>

    This is a special class of molecules which contain more than one type of rotational axes (n≥2) that are neither perpendicular to the principal Cn axis (n-highest), as in Dn and related point groups, nor bear any perpendicular relationship. These high-symmetry molecules have shapes corresponding to the five platonic solids: tetrahedral, octahedral, cube, dodecahedral and icosahedra.

</p>

<h3>Tetrahedral Point Groups:</h3>
<p>The highest-fold axis in these point groups is C3 axis, which is occur in multiples. Molecules with only C3 axes and additionally only C2 axes belong to T, a pure rotational point group, since they contain only proper rotational axes. All other type of elements (σv ,i, Sn) are absent in three groups.

    T:   8C3 (4C31, 4C32), 3C 2, E   </p>
    <img src="uploads/t17.png" alt="">


<p>When σd, S4 (collinear with C2 axes) elements are added to the T group elements, we get a full group called Td. The order of this group is 24.



    Td: 8C3 (4C31, 4C32), 3C 2, E, 6S4 (S41, S43), 6 σd</p>
    <img src="uploads/t18.png" alt="">

<p>There is another uncommon point group, Th, which can be obtained by adding three planes of symmetry (σh) to T group. The order of this is group is 24.



    Th :8C3 (4C31, 4C32), 3C 2, i, 3σh, 8S6 (4S61, 4S65)



    Example - Co(NO2)63-</p>
    <img src="uploads/t19.png" alt="">


<h3>Octahedral Point Groups:</h3>
<p>This is another class of cubic groups. Additionally, octahedral point groups have multiple C4 axes when compared to that of tetrahedral groups.



    When the group contains only rotational axes, it is labelled as O group, h, of this group are 24.



    O:    E, 6C4 (3C41, 3C42), 8C3 (4C31, 4C32), 6C 2, 3C 2 ‘=3C42



    To the O group elements, if 3σh and 6 σd planes are added, a group of higher symmetry can be generated. The order of this group is 48.



    Oh  E, 6C4 (3C41, 3C42), 3C 2 ‘=3C42, 6C 2, 8C3 (4C31, 4C32), i, 3σh, 6σd, 6S4 (S41, S43), 8S6 (4S61, 4S65)</p>

    <img src="uploads/t20.png" alt="">

    <h3>Icosahedral Groups:</h3>
    <p>This group contains molecules with either icosahedral or pentagonal dodecahedral shapes and belongs to Ih point groups. The molecules containing only the rotational elements are said to be belongs to I point group. The order of this point group is 60, whereas that full group is 120.



        I        E, 24C5 (6C51, 6C52, 6C53, 6C54), 20C3 (10C31, 10C32), 15C 2

        Ih       E, 24C5, 20C3, 15C 2,24S10 (6S101, 6S1036S107,6S109), 20S6 (10S61, 10S65), i, 15σ</p>

    <h3>Great Orthogonality Theorem:</h3>
    The matrices of the different Irreducible Representations (IR) possess certain well defined interrelationships and properties. Orthogonality theorem is concerned with the elements of the matrices which constitute the IR of a group.

    The mathematical statement of this theorem is,<br>
    <img src="uploads/t21.png" alt=""><br>

    Where,<br><br>
    i, j – Irreducible Representations<br>
    li, lj – Its dimensions<br>
    h – Order of a group<br>
    Γi(R)mn – Element of mth row, nth column of an ith representation<br>
    Γj(R)'m'n' - Element of m' th row, n' th column of j' th representation<br>
    δij δmm' δnn' – Kronecker delta<br>
    <br>
    Kronecker delta can have values 0 and 1. Depending on that the main theorem can be made into three similar equations.

    <ul>
        <li>When, Γi ≠ Γj and j ≠ i, then δij = 0<br><br>
            Therefore, ΣR [ Γi(R)mn ] [ Γj(R)'m'n' ]* = 0</li>
        <li>When, Γi = Γj and j = i, then δij = 1<br><br>
            Therefore, ΣR [ Γi(R)mn ] [ Γi(R)'m'n' ]* = 0
        </li>
        <p>From these two equations we can say the Orthogonality theorem as, “the sum of the product of the irreducible representation is equal to zero”.</p>
        <li>When i = j, m = m', n = n'<br><br>
            <img src="uploads/t22.png" alt=""><br></li>
            <p>From the above equations some important rules of the irreducible representations of a group and there character were obtained.</p>
    </ul>

    <h3>Five Rules Obtained:</h3>
    <img src="uploads/t23.png" alt="" width="1000px" height="500px"><br></li>

    <h3>Applications:</h3>
    <p>Applying these 5 rules we can develop the character table for various point groups. For most chemical applications, it is sufficient to know only the characters of the each of the symmetry classes of a group.</p>

    <h3>Steps for The Construction of A Character Table::</h3>
    <ul>
        <li>Write down all the symmetry operations of the point group and group them into classes.</li>
        <li>Note that the no: of the IR is found out using the theorem.</li>
        <li>Interrelationships of various group operations are to be carefully followed.</li>
        <li>Use the orthogonality and the normality theorem in fixing the characters.</li>
        <li>Generate a representation using certain basic vectors. Try out with X, Y, Z, Rσ, Ry, Rz etc. as the bases and check.</li>
    </ul>


    <h3>Character Table for C2v Point Group:</h3>
    <img src="uploads/t24.png" alt="">
    <img src="uploads/t25.png" alt="">
    <img src="uploads/t26.png" alt="">
    <img src="uploads/t27.png" alt="">

    <h3>Rules For Assigning Mullicon Symbols:</h3>
    <ul>
        <li>If the IR is unidimensional term A or B is used.<br><br>

            If it is two dimensional E is used.<br>

            If it is three dimensional T is used.</li><br><br>
        <li>If one dimensional IR is symmetric with respect to the principle axis Cn, i.e., character of Cn is +1, the term A is used. If it is -1, the term B is used.</li><br><br>
        <li> If IR is symmetric with respect to subsidiary axes then subscript 1 is given and is antisymmetric then subscript 2 is given.</li><br><br>
        <li>Prime and double prime marks are used for indicating symmetric or antisymmetric with respect to horizontal plane.</li><br><br>
        In any character table there are 4 different areas.<br><br>



Area I              – Characters of symmetry operations<br>

Area II             – Mullicon Symbols<br>

Area III            – Cartesion coordinates of rotation axes.<br>

Area IV            – Binary Products<br>

    </ul>

    <h3>Area III:</h3>
    <p>
    In order to assign the cartesion coordinates, different operations are performed on each of the axes. Here we find the symbols X, Y, Z represents coordinates and rotations Rx, Ry and Rz.<br>Consider a vector along with Z axes, the identity doesn’t change the direction of the head of the vector. On doing C2, σxz, σyz operations no change will occur. Hence its characters are 1 1 1 1. Therefore the vector ‘Z’ transforms under A1.

    <br><br>Similarly,<br>
    <img src="uploads/t28.png" alt=""><br><br>

    The characters are 1 -1 1 -1 corresponding to B1. And with respect to vector Y, 1 -1 -1 1 and therefore corresponds to B2. Similar arrangement could be made to rotation axes Rx, Ry, Rz representing rotation about XZ axes. In order to see how they transformed, a curved arrow should be considered around the axes. If the direction of the head of the curved arrow doesn’t change due to operation, the character is +1, otherways it is -1.<br><br>

    <img src="uploads/t29.png" alt=""><br><br>


    The characters are 1 1 -1 -1. Therefore it will be A2 and it becomes Rz.<br>
    <img src="uploads/t30.png" alt=""><br><br>

     The characters are 1 -1 1 -1. Therefore it will be B1 and it becomes Rx. Similarly B2 become Ry.<br><br>Therefore,

     <br><br><img src="uploads/t31.png" alt=""><br><br>
    </p>

    <h3>Area IV:</h3>
    <img src="uploads/t32.png" alt=""><br><br>

    <h3>Character Table for C3v Point Group:</h3>
    <h3>For Area I:</h3>
    <p> Assign the Mullicon symbols.
        <img src="uploads/t33.png" alt=""></p>

    <h3>For Area III:

    </h3>
    <p>In order to assign the Cartesian coordinates different operations are performed on each of the axes. Here we were finding the symbols X, Y, Z represents coordinates and rotations Rx, Ry and Rz.<br><br>Consider,<br><br>
    <img src="uploads/t34.png" alt=""><br><br>

    The characters are 1 1 1 corresponding to A1.<br><br>
    <img src="uploads/t35.png" alt=""><br><br>

    The characters are 1 -1 1, the character corresponding to C3 will be -1. Therefore it will be E. Similarly for vector Y, we get 1 -1 1 and this also E.<br><br>Similar arrangement could be made to rotation axes Rx, Ry, Rz.<br><br>
    <img src="uploads/t36.png" alt=""><br><br>

    The characters are 1 -1 1. Therefore it corresponds to E and it will become Rx.
    <br><br>
    <img src="uploads/t37.png" alt=""><br><br>

    The characters are 1 1 -1. Therefore it corresponds to A2 and it will become Rz.
    <br><br>Similarly for E the characters are 2 -1 0 and it will become Ry.<br><br>
    <img src="uploads/t38.png" alt=""><br><br>

    </p>

    <h3>
        Area IV:</h3>

        <img src="uploads/t39.png" alt="" width="1000px" height="500px"><br><br>










</div>
      </div>
      <div class="procedure">
      <div>
        <h2 style="text-align:center">Procedure:</h2>
        <img src="uploads/p1.png" alt="">
        <img src="uploads/p2.png" alt="">
        <img src="uploads/p3.png" alt="">
    </div>
      </div>

    <div class="quiz"></div>
    <div class="self_evaluation"> </div>
    <div class="reference"> </div>

    <!-- ADMIN: Add Question (QUIZ) -->
      <?php
        if($_SESSION['admin']){
          echo '<div class="add_ques"><form method="post" action="add_ques.php">
                    <label for="question">Question:</label><br>
                    <input type="text" id="question" name="question" required><br>

                    <label for="option1">Option 1:</label><br>
                    <input type="text" id="option1" name="option1" required><br>

                    <label for="option2">Option 2:</label><br>
                    <input type="text" id="option2" name="option2" required><br>

                    <label for="option3">Option 3:</label><br>
                    <input type="text" id="option3" name="option3" required><br>

                    <label for="option4">Option 4:</label><br>
                    <input type="text" id="option4" name="option4" required><br>

                    <label for="answer">Correct Answer:</label><br>
                    <select id="answer" name="answer" required>
                        <option value="">--Select Answer--</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </select><br>

                    <input type="submit" value="Submit">
                    </form></div>';
        }
      ?>


    </div>


  </div>


  <!-- SIMULATION -->
  <div class="container_2">
    <div class="simulator1"> </div>
    <div class="simulator2"> </div>
  </div>




    <script src="js/nav_jinay.js"></script>
    <script src="js/simulator.js"></script>
    <script src="js/simulationProcedure.js"></script>
    <script src="js/chatRoom.js"></script>



    <script src='http://code.jquery.com/jquery-3.3.1.min.js' integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js' integrity='sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T' crossorigin='anonymous'></script>


</body>
</html>