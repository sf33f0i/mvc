<? 
function generator ($from = 0, $to= 100)
{
    for($i = $from; $i< $to; $i++){
        yield from powe($i);
    }
}
function powe ($i) {
    yield $i * $i;
}
foreach(generator() as $value){
    echo $value.'  ';
}