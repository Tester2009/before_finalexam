<!--
Written by Tester2009
muhammadaliffmuazzam@gmail.com
simple note before final exam :)
Nov 21, 2016
-->
<b>Bold</b>
<br />
<i>Italic</i>

<br />
<dl>
  <dt>This is title</dt>
  <dd>This is data</dd>
  <dt>This is title2</dt>
  <dd>This is data2</dd>
</dl>

<code>
  &lt;dl&gt;<br />
    &nbsp;&lt;dt&gt;This is title&lt;/dt&gt;<br />
    &nbsp;&lt;dd&gt;This is data&lt;/dd&gt;<br /><br />
    &nbsp;&lt;dt&gt;This is title2&lt;/dt&gt;<br />
    &nbsp;&lt;dd&gt;This is title2&lt;/dd&gt;<br />
  &lt;/dl&gt;

</code>

<br />
<h3>Fieldset</h3>

<form>
  <fieldset>
    <legend>Demo only</legend>
    Nama anda: <input type="text" name="namaanda" />
    Email anda: <input type="email" name="emailanda" />
    <button type="submit">Hantar</button>
  </fieldset>
</form>

<br />

<code>
&lt;form&gt;<br />
<font style="color:yellow">&nbsp;&lt;fieldset&gt;</font><br />
<font style="color:yellow">&nbsp;&nbsp;&lt;legend&gt;Demo only&lt;/legend&gt;</font><br />
&nbsp;&nbsp;Nama anda: &lt;input type="text" name="namaanda" /&gt;<br />
&nbsp;&nbsp;Email anda: &lt;input type="email" name="emailanda" /&gt;<br />
&nbsp;&nbsp;&lt;button type="submit"&gt;Hantar&lt;/button&gt;<br />
<font style="color:yellow">&nbsp;&lt;/fieldset&gt;</font><br />
&lt;/form&gt;
</code>
<br />

<h3>TextArea</h3>

<textarea cols=30 rows=5></textarea>
<br /><br />
<code>
&lt;textarea cols=30 rows=5&gt;&lt;/textarea&gt;
</code>
<br />
<h3>Marquee</h3>

<marquee>This is marquee lel</marquee>

<code>
<font style="color:yellow">&lt;marquee&gt;This is marquee lel&lt;/marquee&gt;</font>
</code>

<br />

<h3>Checkbox</h3>
<input type="checkbox" name="checkbox_demo" value="CheckBox1"/>I Have a Checkbox 1<br />
<input type="checkbox" name="checkbox_demo" value="CheckBox2"/>I Have a Checkbox 2<br />

<br />
<code>
&lt;input type="checkbox" name="checkbox_demo" value="CheckBox1"/&gt;I Have a Checkbox 1<br />
&lt;input type="checkbox" name="checkbox_demo" value="CheckBox2"/&gt;I Have a Checkbox 2<br />
</code>
<br />

<h3>Select</h3>

<select name="Selection" multiple="multiple">
  <option value="a">A</option>
  <option value="b">B</option>
  <option value="c">C</option>
</select>
<br />

<code>
&lt;select name="Selection" multiple="multiple"&gt;<br />
&nbsp;&lt;option value="a"&gt;A&lt;/option&gt;<br />
&nbsp;&lt;option value="b"&gt;B&lt;/option&gt;<br />
&nbsp;&lt;option value="c"&gt;C&lt;/option&gt;<br />
&lt;/select&gt;
</code>

<br />

<h3>ROW SPAN</h3>
<table border=1>
  <tr>
    <th>Month</th>
    <th>Savings</th>
    <th>Savings for holiday</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
    <td rowspan=2>$50</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$200</td>
  </tr>
</table>
<br />
<code>
&lt;table border=1&gt;<br />
&nbsp;&lt;tr&gt;<br />
&nbsp;&nbsp;&lt;th&gt;Month&lt;/th&gt;<br />
&nbsp;&nbsp;&lt;th&gt;Savings&lt;/th&gt;<br />
&nbsp;&nbsp;&lt;th&gt;Savings for holiday&lt;/th&gt;<br />
&nbsp;&lt;/tr&gt;<br />

&nbsp;&lt;tr&gt;<br />
&nbsp;&nbsp;&lt;td&gt;January&lt;/td&gt;<br />
&nbsp;&nbsp;&lt;td&gt;$100&lt;/td&gt;<br />
<font color=yellow>&nbsp;&nbsp;&lt;td rowspan=2&gt;$50&lt;/td&gt;</font><br />
&nbsp;&lt;/tr&gt;<br />

&nbsp;&lt;tr&gt;<br />
&nbsp;&nbsp;&lt;td&gt;February&lt;/td&gt;<br />
&nbsp;&nbsp;&lt;td&gt;$200&lt;/td&gt;<br />
&nbsp;&lt;/tr&gt;<br />
&lt;/table&gt;
</code>

<br />


<h3>COLUMN SPAN</h3>
<table border=1>
<tr>
  <th>Month</th>
  <th>Savings</th>
  <th>Savings for holiday</th>
</tr>
<tr>
  <td>January</td>
  <td>$200</td>
  <td>$120</td>
</tr>
<tr>
  <td>February</td>
  <td colspan=2>$200</td>
</tr>
</table>
<br />
<code>
  &lt;table border=1&gt;<br />
  &nbsp;&lt;tr&gt;<br />
  &nbsp;&nbsp;&lt;th&gt;Month&lt;/th&gt;<br />
  &nbsp;&nbsp;&lt;th&gt;Savings&lt;/th&gt;<br />
  &nbsp;&nbsp;&lt;th&gt;Savings for holiday&lt;/th&gt;<br />
  &nbsp;&lt;/tr&gt;<br />

  &nbsp;&lt;tr&gt;<br />
  &nbsp;&nbsp;&lt;td&gt;January&lt;/td&gt;<br />
  &nbsp;&nbsp;&lt;td&gt;$100&lt;/td&gt;<br />
  &nbsp;&nbsp;&lt;td&gt;Savings for holiday&lt;/td&gt;<br />
  &nbsp;&lt;/tr&gt;<br />

  &nbsp;&lt;tr&gt;<br />
  &nbsp;&nbsp;&lt;td&gt;February&lt;/td&gt;<br />
  <font color=yellow>&nbsp;&nbsp;&lt;td colspan=2&gt;$200&lt;/td&gt;</font><br />
  &nbsp;&lt;/tr&gt;<br />
  &lt;/table&gt;
</code>


<br />
<h3>Hyperlink</h3>
<a href="#link">Link here</a><br /><br />

<code>
  &lt;a href="#link"&gt;Link here&lt;/a&gt;
</code>

<br />
<h3>Image</h3>
<img src="./Megumin.png" style="width: 700px; height: 450px" /><br /><br />
<code>
  &lt;img src="./Megumin.png" style="width: 700px; height: 450px" /&gt;
</code>




<br />
<h3>PHP Function</h3>
<?php
function shout($name) {
  echo "<font style='color: blue'>Hello there, ".$name."</font>";
}
shout("Tester");
?>

<p>The code is following this.</p>

<code>
  &lt;?php<br />
<font style="color:yellow">function shout($name) {<br />
  echo "Hello there, ".$name;<br />
}<br />
shout("Tester");</font><br />
?&gt;
</code>


<br />
<h3>Ordered List</h3>
<ol>
  <li>Milk</li>
  <li>Orange Juice</li>
  <li>Coffee</li>
</ol>
<br />

<code>
  &lt;ol&gt;<br />
  &nbsp;&lt;li&gt;Milk &lt;/li&gt;<br />
  &nbsp;&lt;li&gt;Orange Juice &lt;/li&gt;<br />
  &nbsp;&lt;li&gt;Coffee &lt;/li&gt;<br />
  &lt;/ol&gt;<br />
</code>
<br />
<h3>Unordered List</h3>

<ul>
  <li>Milk</li>
  <li>Orange Juice</li>
  <li>Coffee</li>
</ul>
<br />
<code>
  &lt;ul&gt;<br />
  &nbsp;&lt;li&gt;Milk&lt;/li&gt;<br />
  &nbsp;&lt;li&gt;Orange Juice&lt;/li&gt;<br />
  &nbsp;&lt;li&gt;Coffee&lt;/li&gt;<br />
  &lt;/ul&gt;<br />
</code>

<br />

<ol>
  <li>
    EPL
    <ul>
      <li>Chelsea</li>
      <li>Manchester United</li>
      <li>Arsenal</li>
      <li>Liverpool</li>
    </ul>
  </li>
  <br />
  <li>
    Liga Super
    <ul>
      <li>JDT</li>
      <li>Perak</li>
      <li>Pahang</li>
    </ul>
  </li>
</ol>

<code>
  &lt;ol&gt;<br />
  &nbsp;&lt;li&gt;<br />
  &nbsp;&nbsp;EPL<br />
  &nbsp;&nbsp;&lt;ul&gt;<br />
  &nbsp;&nbsp;&nbsp;&lt;li&gt;Chelsea&lt;/li&gt;<br />
  &nbsp;&nbsp;&nbsp;&lt;li&gt;Manchester United&lt;/li&gt;<br />
  &nbsp;&nbsp;&nbsp;&lt;li&gt;Arsenal&lt;/li&gt;<br />
  &nbsp;&nbsp;&nbsp;&lt;li&gt;Liverpool&lt;/li&gt;<br />
  &nbsp;&nbsp;&lt;/ul&gt;<br />
  &nbsp;&lt;/li&gt;<br />

  &nbsp;&lt;li&gt;<br />
  &nbsp;&nbsp;Liga Super<br />
  &nbsp;&nbsp;&lt;ul&gt;<br />
  &nbsp;&nbsp;&nbsp;&lt;li&gt;JDT&lt;/li&gt;<br />
  &nbsp;&nbsp;&nbsp;&lt;li&gt;Perak&lt;/li&gt;<br />
  &nbsp;&nbsp;&nbsp;&lt;li&gt;Pahang&lt;/li&gt;<br />
  &nbsp;&nbsp;&lt;/ul&gt;<br />
  &nbsp;&lt;/li&gt;<br />
  &lt;/ol&gt;
</code>

<br />
<h3>Body Background Color (bgcolor)</h3>

<body bgcolor=green>
</body>


<code>
&lt;body bgcolor=green&gt;<br />
&lt;/body&gt;
</code>

<br />

<h3>Increment & Decrement</h3>
<?php
echo "Number start from: 1". "<br /><br />";

$post_increment = 1;
echo "Post Increment: ". $post_increment++ ."<br />";

$pre_increment = 1;
echo "Pre Increment: ". ++$pre_increment ."<br />";

echo "<br />";

$post_decrement = 1;
echo "Post Decrement: ". $post_decrement-- ."<br />";

$pre_decrement = 1;
echo "Pre Decrement: ". --$pre_decrement ."<br />";
?>
<br />
&lt;?php<br />
echo "Number start from: 1". "&lt;br /&gt;&lt;br /&gt;";<br />
<font color=yellow>$post_increment = 1;</font><br />
echo "Post Increment: ". <font color=yellow>$post_increment++</font> ."&lt;br /&gt;";<br /><br />
$pre_increment = 1;<br />
echo "Pre Increment: ". <font color=yellow>++$pre_increment</font> ."&lt;br /&gt;";<br /><br />

$post_decrement = 1;<br />
echo "Post Decrement: ". <font color=yellow>$post_decrement--</font> ."&lt;br /&gt;";<br /><br />
$pre_decrement = 1;<br />
echo "Pre Decrement: ". <font color=yellow>--$pre_decrement</font> ."&lt;br /&gt;";<br />
?&gt;


<br />

<!-- <h3>PHP Array</h3> -->

<?php
// $array_demo = array(
//   1, # array start from 0. so this is 0
//   2, # this is 1
//   3, # this is 2
//   4 # this is 3
// );
// echo $array_demo[2];
//
// echo "<br />";
//
// $array_demo2 = array(
//   "abc" => 2, #will return 2
//   "def" => 3,
//   "ghi" => 4,
//   "jkl" => 5
// );
// echo $array_demo2["def"];
//
// echo "<br />";
// $test_array = array(
//   3 => 15,
//   7 => 35,
//   9 => 45
// );
// $test_array[2] = 10;
//
// var_dump($test_array);
?>



<?php
// $mystring = 'baca';
// $findme   = 'a';
// $pos = strpos($mystring, $findme);
//
// // Note our use of ===.  Simply == would not work as expected
// // because the position of 'a' was the 0th (first) character.
// if ($pos === false) {
//     echo "The string '$findme' was not found in the string '$mystring'";
// } else {
//     echo "The string '$findme' was found in the string '$mystring'";
//     echo " and exists at position $pos";
// }
?>

<br />
<h3>SQL</h3>


<h4>Create Database</h4>
<code>
  CREATE DATABASE HELLO_DATABASE;
</code>
<br />

<h4>Create Tables</h4>
<code>
  CREATE TABLES Test_Tables (<br />
  `id` int(11) not null primary key auto_increment,<br />
  `name` text,<br />
  `age` text,<br />
  `email` text<br />
  );
</code>
<br />

<h4>Read Tables</h4>
<code>
  SELECT * FROM Test_Tables;
</code>
<br />

<h4>Update Tables</h4>
<code>
  UPDATE Test_Tables SET name="tukar_nama" WHERE id='2';
</code>
<br />

<h4>Delete Tables</h4>
<code>
  DELETE FROM Test_Tables WHERE id='3';
</code>
<br />

<h4>Delete Database</h4>
<code>
  DROP DATABASES HELLO_DATABASE;
</code>
