<?php
require_once "../db_connection.php";
$c = new PDO($db_pg, $user, $password);

print "hello<br>";

$gen_s_type="";
$gen_1=$gen_2=$gen_3="";
$rating_from=$rating_to="";
$year_from=$year_to="";
$kwords_s_type="";
$keyword1=$keyword2=$keyword3="";
$d_firstname=$d_lastname="";
$a_firstname=$a_lastname="";



if (!empty($_POST))
{
  $nselect="select * from movies where year between $year_from and $year_to AND ((rating_imdb >= $rating_from) and (rating_imdb <= $rating_to)) AND ((rating_filmweb >= $rating_from) and (rating_filmweb <= $rating_to))".$d.$a.$g.$k;
  if (isset($_POST['d-firstname']) || isset($_POST['d-lastname']))
  {
    $d = " AND movie_id in (select movie_id from movies_directors where director_id in (select director_id from directors where ".$dd;
    $nselect .= $d;
    if (isset($_POST['d-firstname']) && isset($_POST['d-firstname']))
    {
      $dfn_ln = "first_name like INITCAP('$d_firstname') and last_name like INITCAP('$d_lastname')))";
      $nselect .= $dfn_ln;
    }
    else
    { if (isset($_POST['d-firstname']))
      {  $dfn = "first_name like INITCAP('$d_firstname')))";
         $nselect .= $dfn;
      }
      else
      {  $dln = "last_name like INITCAP('$d_lastname')))";
         $nselect .= $dln;
       }
     }
  }
  if (isset($_POST['a-lastname']) || isset($_POST['a-firstname']))
  {
    $a = " AND movie_id in (select movie_id from movies_actors where actor_id in (select actor_id from actors where ".$aa;
    $nselect .= $a;
    
    if (isset($_POST['a-lastname']) && isset($_POST['a-firstname']))
    {
      $afn_ln = "first_name like INITCAP('$a_firstname') and last_name like INITCAP('$a_lastname')))";
      $nselect .= $afn_ln;
    }
    else
    { if (isset($_POST['a-firstname']))
      {  $afn = "first_name like INITCAP('$a_firstname')))";
         $nselect .= $afn;
      }
      else
      {  $aln = "last_name like INITCAP('$a_lastname')))";
         $nselect .= $aln;
      }
     }
  }
  if (isset($_POST['genre1']) || isset($_POST['genre2']) || isset($_POST['genre3']))
  { $g_2=$g_3="";
    $g = " AND movie_id in (select movie_id from movies_genres where genre".$gg.")";
    $nselect .= $g;
    if (isset($_POST['genre1']))
    {  if (isset($_POST['genre2']))
       { $g_2=",'".$gen_2."'"; }
       if (isset($_POST['genre3']))
       { $g_3=",'".$gen_3."'"; }
      $gw = " in ('".$gen_1."'".$g_2.$g_3.")";
      $nselect .= $gw;
    }
    else
    {  if (isset($_POST['genre2']))
       { $g_2=" and genre='".$gen_2."'"; }
       if (isset($_POST['genre3']))
       { $g_3=" and genre='".$gen_3."'"; }
      $gs = "='".$g_1."'".$g_2.$g_3;
      $nselect .= $gs;
    }
  }
  if (isset($_POST['keyword1']) || isset($_POST['keyword2']) || isset($_POST['keyword3']))
  { $k_2=$k_3="";
    $k = " AND movie_id in (select movie_id from movies_keywords where keyword".$kk.")";
    $nselect .= $k;
    if (isset($_POST['keyword1']))
    {  if (isset($_POST['keyword2']))
       { $k_2=",LOWER('".$keyword2."')"; }
       if (isset($_POST['keyword3']))
       { $k_3=",LOWER('".$keyword3."')"; }
      $kw = " in (LOWER('".$keyword1."')".$k_2.$k_3.")";
      $nselect .= $kw;
    }
    else
    {  if (isset($_POST['keyword2']))
       { $k_2=" and keyword=LOWER('".$keyword2."')"; }
       if (isset($_POST['keyword3']))
       { $k_3=" and keyword=LOWER('".$keyword3."')"; }
      $ks = "=LOWER('".$k_1."')".$k_2.$k_3;
      $nselect .= $ks;
    }
  }
echo $nselect.";";

}
else
{ print "select * from movies"; }

?>

