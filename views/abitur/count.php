
$exam = '';
$date = '';
$enresult = '';
$deresult = '';
foreach ($model as $item) {
if($item->ass_lang_cours === 'en'){
if($exam != $item->exam_nom OR $date != $item->exam_dateh_ecrit)
{
$enresult .= '<br><b>Exam : '. $item->exam_nom.' '.date('d.m.Y',strtotime($item->exam_dateh_ecrit)).'</b>';
}
$enresult .=  '<li>';
    $enresult .=  'Niveau: '.$item->ass_global_level.' | ';
    $enresult .=  'Partipants: '.$item->cnt.' | ';
    $enresult .=  'Réussite: '.$item->cntsucces.' | ';
    $enresult .=  'Echec: '.$item->cntechec.' | ';
    $enresult .=  'Abandons: '.$item->cntabandon.' | ';
    $enresult .=  '</li>';
}
if($item->ass_lang_cours === 'de'){
if($exam != $item->exam_nom OR $date != $item->exam_dateh_ecrit)
{
$deresult .= '<br><b>Exam : '. $item->exam_nom.' '.date('d.m.Y',strtotime($item->exam_dateh_ecrit)).'</b>';
}
$deresult .=  '<li>';
    $deresult .=  'Niveau: '.$item->ass_global_level.' | ';
    $deresult .=  'Partipants: '.$item->cnt.' | ';
    $deresult .=  'Réussite: '.$item->cntsucces.' | ';
    $deresult .=  'Echec: '.$item->cntechec.' | ';
    $deresult .=  'Abandons: '.$item->cntabandon.' | ';
    $deresult .=  '</li>';
}

$exam = $item->exam_nom;
$date = $item->exam_dateh_ecrit;

}

?>

<h4>Anglais</h4>
<ul>
    <?= $enresult;?>
</ul>
<h4>Allemand</h4>
<ul>
    <?= $deresult;?>
</ul>