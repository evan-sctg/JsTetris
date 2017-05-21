<script>
//
//
//Author: Evan Garcia
//
//



//~ var Shapes=new Array(
//~ new Array(
//~ 1,1,1,1,
//~ 0,0,1,0,
//~ 0,0,1,0,
//~ 0,0,1,0
//~ )
//~ );


var Shapes=new Array(
new Array(
0,0,0,0,
1,1,1,1,
0,0,0,0,
0,0,0,0
),new Array(
0,0,0,0,
1,0,0,0,
1,1,1,0,
0,0,0,0
),new Array(
0,0,0,0,
0,0,0,1,
0,1,1,1,
0,0,0,0
),new Array(
0,0,0,0,
0,1,1,0,
0,1,1,0,
0,0,0,0
),new Array(
0,0,0,0,
0,0,1,1,
0,1,1,0,
0,0,0,0
),new Array(
0,0,0,0,
0,0,1,0,
0,1,1,1,
0,0,0,0
),new Array(
0,0,0,0,
1,1,0,0,
0,1,1,0,
0,0,0,0
)
);





//~ new Array(
//~ 1,1,1,1,
//~ 0,0,0,0,
//~ 0,0,0,0,
//~ 0,0,0,0
//~ ),new Array(
//~ 1,0,0,0,
//~ 1,1,1,0,
//~ 0,0,0,0,
//~ 0,0,0,0
//~ ),new Array(
//~ 0,0,0,1,
//~ 0,1,1,1,
//~ 0,0,0,0,
//~ 0,0,0,0
//~ ),new Array(
//~ 0,1,1,0,
//~ 0,1,1,0,
//~ 0,0,0,0,
//~ 0,0,0,0
//~ ),new Array(
//~ 0,0,1,1,
//~ 0,1,1,0,
//~ 0,0,0,0,
//~ 0,0,0,0
//~ ),new Array(
//~ 0,0,1,0,
//~ 0,1,1,1,
//~ 0,0,0,0,
//~ 0,0,0,0
//~ ),new Array(
//~ 1,1,0,0,
//~ 0,1,1,0,
//~ 0,0,0,0,
//~ 0,0,0,0
//~ )






//~ 0,1,0,0,
//~ 0,1,1,0,
//~ 0,0,1,0

//~ var RotationAlterations= new Array(12,7,2,-3,9,4,-1,-6,6,1,-4,-9,3,-2,-7,-12);
var RotationAlterations= new Array(-12,-7,-2,3,-9,-4,1,6,-6,-1,4,9,-3,2,7,12);
var RotationVectors= new Array();


RotationVectors[90]= new Array(
new Array(0,-3),//16
new Array(-1,-2),
new Array(-2,-1),
new Array(-3,0),
new Array(1,-2),
new Array(0,-1),
new Array(-1,0),//10
new Array(-2,1),
new Array(2,-1),
new Array(1,0),
new Array(0,1),
new Array(-1,2),//5
new Array(3,0),
new Array(2,1),
new Array(1,2),
new Array(0,3)//1
);

RotationVectors[180]= new Array(
new Array(-3,0),//16
new Array(-2,1),
new Array(-1,2),
new Array(0,3),
new Array(-2,-1),
new Array(-1,0),
new Array(0,1),//10
new Array(1,2),
new Array(-1,-2),
new Array(0,-1),
new Array(1,0),
new Array(2,1),//5
new Array(0,-3),
new Array(1,-2),
new Array(2,-1),
new Array(3,0)//1
);

RotationVectors[270]= new Array(
new Array(0,3),//1
new Array(1,2),
new Array(2,1),
new Array(3,0),
new Array(-1,2),//5
new Array(0,1),
new Array(1,0),
new Array(2,-1),
new Array(-2,1),
new Array(-1,0),//10
new Array(0,-1),
new Array(1,-2),
new Array(-3,0),
new Array(-2,-1),
new Array(-1,-2),
new Array(0,-3)//16
);




RotationVectors[0]= new Array(
new Array(3,0),//1
new Array(2,-1),
new Array(1,-2),
new Array(0,-3),
new Array(2,1),//5
new Array(1,0),
new Array(0,-1),
new Array(-1,-2),
new Array(1,2),
new Array(0,1),//10
new Array(-1,0),
new Array(-2,-1),
new Array(0,3),
new Array(-1,2),
new Array(-2,1),
new Array(-3,0)//16
);


//~ 0,0,1,1,
//~ 0,1,1,0
var TetrisBoardType="Graphical";
var Board=new Array(
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0),
new Array(0,0,0,0,0,0,0,0,0,0)
);

//~ var NextPeice=Shapes[Math.floor(Math.random() * ( Shapes.length+1 ))];

document.onkeydown = KeyPressHandler;
//~ document.onkeyup = KeyPressHandler;
var curinterval=1000;
var mininterval=150;
var curintervalStep=1;
var IntervalController=setTimeout(Update, curinterval);
var GameOver=false;
var GOAlready=false;
var inRotate=false;
var buildingPiece=false;
var pieceInPlay=false;
var pieceInPlayPOS=new Array();
var pieceInPlayROT=0;
//~ var shapeInPlay=new Array();




function KeyPressHandler(data) {

    data = data || window.event;

    if (data.keyCode == '38') {
	//pressed up
	RotatePiece();
    }else if (data.keyCode == '39') {
        //pressed right
	movePieceRight();
    }
    else if (data.keyCode == '40') {
	//pressed down
	movePieceDown();
    }
    else if (data.keyCode == '37') {
      //pressed left
      
	movePieceLeft();
    }else{
    console.log("detected KeyPress: "+data.keyCode);
    }
}



//~ Update();
function Update(){

if(!GameOver){
//alert("here");
if(!pieceInPlay && !buildingPiece){
if(checkFilledRow()){
console.log("Filled Row");
}
putPieceInPlay();
}

if(pieceInPlay && pieceInPlayPOS.length>0){
movePieceDown();
//~ for (var i = 0; i < pieceInPlayPOS.length; i++) {
    //~ console.log(pieceInPlayPOS[i]);
//~ }
}


}else{


if(!GOAlready && confirm("Game Over, Try Again?")){
window.location.reload();
}else{
GOAlready=true;
}

}

displayTetrisBoard();

if(curinterval>mininterval){
curinterval=curinterval-curintervalStep;
}
IntervalController=setTimeout(Update, curinterval);
	
}




function HandleFilledRows(tmpbrd,startrow,hasfilledRow){

for(x=startrow;x<tmpbrd.length;x++){
var filledSearch=tmpbrd[x].indexOf(0);
	if(filledSearch<0){
	hasfilledRow=true;
	tmpbrd.splice(x, 1);
	tmpbrd.splice(0, 0, new Array(0,0,0,0,0,0,0,0,0,0));
	return HandleFilledRows(tmpbrd,x+1,hasfilledRow);
	}
}
return new Array(hasfilledRow,tmpbrd);
}



function checkFilledRow(){
var hasfilledRow=false;
var tmpbrd=JSON.parse(JSON.stringify(Board));

//~ for(x=(Board.length-1);x>=0;x--){
var tmpbrdaltered=HandleFilledRows(tmpbrd,0,false);
hasfilledRow=tmpbrdaltered[0];
tmpbrd=tmpbrdaltered[1];
//~ }
Board=JSON.parse(JSON.stringify(tmpbrd));
return hasfilledRow;
}




function checkMovePieceRight(){

var clearForMove=true;


if(pieceInPlay){
var tmpchkboard=JSON.parse(JSON.stringify(Board));

for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(tmpchkboard.length>row && row >= 0){
if(tmpchkboard[0].length>col && col >= 0){
if(val){
tmpchkboard[row][col]=0;
}
}
}
}
}



for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
//~ parseInt(x/4)
//~ var prevRowVal=((x>3)? pieceInPlayPOS[x-4][2]: 0);
//~ var nextColVal=((x+1<pieceInPlayPOS.length && parseInt(x/4)>0)? pieceInPlayPOS[x+1][2]: 0);
var nextColVal=((x+1<pieceInPlayPOS.length && parseInt(x+1%4)>0)? pieceInPlayPOS[x+1][2]: 0);


if(val){
//~ if((col+1)>=Board[0].length || (tmpchkboard[row][(col+1)]==1 && nextColVal==0)){
if((col+1)>=Board[0].length || (tmpchkboard[row][(col+1)]==1)){
//~ if((col+1)>=Board[0].length || (Board[row][(col+1)]==1 && nextColVal==0)){
console.log('False['+tmpchkboard[row][(col+1)]+']['+nextColVal+']'+(row)+", "+(col+1));
clearForMove=false;
}
}
}
}
}else{
console.log('False'+(row)+", "+(col+1));
clearForMove=false;
}
return clearForMove;
}



function movePieceRight(){
var okToMove=checkMovePieceRight();
 //~ console.log(okToMove);
if(okToMove){

for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(Board.length>row && row >= 0){
if(Board[0].length>col && col >= 0){
if(val){
Board[row][col]=0;
}
}
}
}
}

for(x=0;x<pieceInPlayPOS.length;x++){
//~ for(x=(pieceInPlayPOS.length-1);x>=0;x--){

var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(val){
Board[row][(col+1)]=1;
//~ Board[row][col]=((x-1>=0 && parseInt(x/4)>0)? pieceInPlayPOS[x+1][2]: 0);
//Board[row][col]=((x>0 && parseInt(x/4)<4)? pieceInPlayPOS[x-1][2]: 0);
//~ Board[row][col]=((x>3)? pieceInPlayPOS[x-4][2]: 0);

}
pieceInPlayPOS[x][0]=row;
pieceInPlayPOS[x][1]=col+1;
//~ Board[row][col]=0;




}
}
displayTetrisBoard();
}


function checkMovePieceLeft(){

var clearForMove=true;

if(pieceInPlay){
var tmpchkboard=JSON.parse(JSON.stringify(Board));

for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(tmpchkboard.length>row && row >= 0){
if(tmpchkboard[0].length>col && col >= 0){
if(val){
tmpchkboard[row][col]=0;
}
}
}
}
}

for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ for(x=0;x<pieceInPlayPOS.length;x++){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
//~ parseInt(x/4)
//~ var prevRowVal=((x>3)? pieceInPlayPOS[x-4][2]: 0);
var prevColVal=((x>0 && parseInt(x/4)<4)? pieceInPlayPOS[x-1][2]: 0);


if(val){
if((col)<1 || (tmpchkboard[row][(col-1)]==1 && prevColVal==0)){
//~ if((row+1)>=Board.length || (Board[(row+1)][col]==1) ){
console.log('False'+(row)+", "+(col-1));
clearForMove=false;
}
}
}
}
}else{
console.log('False'+(row)+", "+(col+1));
clearForMove=false;
}
return clearForMove;
}



function movePieceLeft(){
var okToMove=checkMovePieceLeft();
 //~ console.log(okToMove);
if(okToMove){

for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(Board.length>row && row >= 0){
if(Board[0].length>col && col >= 0){
if(val){
Board[row][col]=0;
}
}
}
}
}


for(x=0;x<pieceInPlayPOS.length;x++){
//~ for(x=(pieceInPlayPOS.length-1);x>=0;x--){

var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(val){
Board[row][(col-1)]=1;
//~ Board[row][col]=((x-1>=0 && parseInt(x/4)>0)? pieceInPlayPOS[x+1][2]: 0);
//Board[row][col]=((x+1<pieceInPlayPOS.length && parseInt(x/4)>0)? pieceInPlayPOS[x+1][2]: 0);
//~ Board[row][col]=((x>3)? pieceInPlayPOS[x-4][2]: 0);

}
pieceInPlayPOS[x][0]=row;
pieceInPlayPOS[x][1]=col-1;
//~ Board[row][col]=0;




}
}
displayTetrisBoard();
}





function checkMovePieceDown(){

var clearForMove=true;

if(pieceInPlay){
var tmpchkboard=JSON.parse(JSON.stringify(Board));

for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(tmpchkboard.length>row && row >= 0){
if(tmpchkboard[0].length>col && col >= 0){
if(val){
tmpchkboard[row][col]=0;
}
}
}
}
}



for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
//~ parseInt(x/4)
//~ var prevRowVal=((x>3)? pieceInPlayPOS[x-4][2]: 0);
var nextRowVal=((x<((pieceInPlayPOS.length)-4))? pieceInPlayPOS[x+4][2]: 0);


if(val){
if((row+1)>=Board.length || (tmpchkboard[(row+1)][col]==1) ){
//~ if((row+1)>=Board.length || (Board[(row+1)][col]==1 && nextRowVal==0) ){
//~ if((row+1)>=Board.length || (Board[(row+1)][col]==1) ){
console.log('mvd False'+(row+1)+", "+col);
clearForMove=false;
}
}
}
}
}else{
console.log('False'+(row)+", "+(col+1));
clearForMove=false;
}
return clearForMove;
}




function movePieceDown(){
var okToMove=checkMovePieceDown();
 //~ console.log(okToMove);
if(okToMove){

for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(Board.length>row && row >= 0){
if(Board[0].length>col && col >= 0){
if(val){
Board[row][col]=0;
}
}
}
}
}


for(x=0;x<pieceInPlayPOS.length;x++){
//~ for(x=(pieceInPlayPOS.length-1);x>=0;x--){

var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];

var val= pieceInPlayPOS[x][2];
if(val){

Board[(row+1)][col]=1;
//Board[row][col]=((x>3)? pieceInPlayPOS[x-4][2]: 0); //can leave stray blocks // meant to clean up any blocks being moved

}
pieceInPlayPOS[x][0]=(row+1);
pieceInPlayPOS[x][1]=col;
pieceInPlayPOS[x][2]=val;
//~ Board[row][col]=0;




}
}else{
pieceInPlay=false;
}
displayTetrisBoard();
}

function putPieceInPlay(){
buildingPiece=true;
pieceInPlayPOS=new Array();
pieceInPlayROT=0
var NextPeice=getNextPiece();
//~ shapeInPlay=NextPeice;
var row=0;
for(x=0;x<NextPeice.length;x++){
if(x+1>4){row=parseInt(x/4);}
var col=((x+1>3)? (x%4)+3:x+3);
if(NextPeice[x]==1){
//~ alert(Math.floor(Math.random() * ( Shapes.length+1 )));
if(Board[row][col]==0){
Board[row][col]=1;
}else{
GameOver=true;
}
}
pieceInPlayPOS[pieceInPlayPOS.length]=new Array(row,col,NextPeice[x]);
}
pieceInPlay=true;
buildingPiece=false;
}


function alterPieceInPlay(NextPeice){

var xi=0;
var tmpchkboard=JSON.parse(JSON.stringify(Board));
for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
tmpchkboard[row][col]=0;
}
}
var Initrow=pieceInPlayPOS[x][0];
var Initcol= pieceInPlayPOS[x][1];

pieceInPlayPOS=new Array();
//~ shapeInPlay=NextPeice;
var row=0;
for(x=0;x<NextPeice.length;x++){
if(x+1>4){row=parseInt(x/4);}
if(NextPeice[x]==1){
//~ alert(Math.floor(Math.random() * ( Shapes.length+1 )));
var col=((x+1>3)? (x%4)+3:x+3);
if(tmpchkboard[Initrow+row][Initcol+col]==0){
tmpchkboard[Initrow+row][Initcol+col]=1;
}
}
pieceInPlayPOS[pieceInPlayPOS.length]=new Array(Initrow+row,Initcol+col,NextPeice[x]);
}
Board=JSON.parse(JSON.stringify(tmpchkboard));
pieceInPlay=true;
}





function changeBoardDifficulty(newDifficulty){
curintervalStep=newDifficulty;
}
function changeBoardType(boardType){
TetrisBoardType=boardType;
}


function displayTetrisBoard(){
var TetrisBoardHtml="";
if(TetrisBoardType=="Binary"){
TetrisBoardHtml=displayTetrisBoardBinary();
}else if(TetrisBoardType=="CSV"){
TetrisBoardHtml=displayTetrisBoardCSV();
}else if(TetrisBoardType=="Graphical"){
TetrisBoardHtml=displayTetrisBoardGraphical();
}else{
TetrisBoardHtml=displayTetrisBoardBinary();
}


document.getElementById("TetrisBoard").innerHTML = TetrisBoardHtml;
}


function displayTetrisBoardCSV(){
var TetrisBoardHtml="";

for(x=0;x<Board.length;x++){
for(y=0;y<Board[x].length;y++){

if(y==(Board[x].length-1)){
TetrisBoardHtml+=Board[x][y]+"<br />";

}else{
TetrisBoardHtml+=Board[x][y]+",";
}

}
}

return TetrisBoardHtml;
}


function displayTetrisBoardBinary(){
var TetrisBoardHtml="<table>";

for(x=0;x<Board.length;x++){
for(y=0;y<Board[x].length;y++){

if(y==(Board[x].length-1)){
TetrisBoardHtml+="<td>"+Board[x][y]+"</td></tr>";

}else{

TetrisBoardHtml+=((y==0)? "<tr>":"")+"<td>"+Board[x][y]+"</td>";
}

}
}
TetrisBoardHtml+="</table>";
return TetrisBoardHtml;
}

function displayTetrisBoardGraphical(){
var TetrisBoardHtml='<table border="1" style="border: solid 2px #000000;">';
aStyle=' style="'+"width: 30px;height: 30px;background-color: rgb(13, 121, 172);"+'"';
naStyle=' style="'+"width: 30px;height: 30px;background-color: rgb(255, 255 255);"+'"';

for(x=0;x<Board.length;x++){
for(y=0;y<Board[x].length;y++){

if(y==(Board[x].length-1)){
TetrisBoardHtml+="<td"+((Board[x][y])? aStyle:naStyle)+"></td></tr>";

}else{

TetrisBoardHtml+=((y==0)? "<tr>":"")+"<td"+((Board[x][y])? aStyle:naStyle)+"></td>";
}

}
}
TetrisBoardHtml+="</table>";
return TetrisBoardHtml;
}


function getNextPiece(){
var tmp = Math.floor(Math.random() * ( Shapes.length-0.1 ));
console.log('shape: '+tmp);
//~ alert(tmp);
	return Shapes[tmp];
	//~ return Shapes[Math.floor(Math.random() * ( Shapes.length+1 ))];
	//~ return NextPeice=Shapes[Math.floor(Math.random() * ( Shapes.length+1 ))];
	}
	
	
	
	

function checkRotatePiece(){
//RotationAlterations
var clearForMove=true;

if(pieceInPlay){
var tmppieceRot=pieceInPlayROT;

if(pieceInPlayROT==0){
// rot to 90
//~ pieceInPlayPOS
tmppieceRot=90;
}else if(pieceInPlayROT==90){
// rot to 180
tmppieceRot=180;
}else if(pieceInPlayROT==180){
// rot to 270
tmppieceRot=270;
}else if(pieceInPlayROT==270){
// rot to 0
tmppieceRot=0;
}

var shaperows=4;
var xi=0;
var tmpchkboard=JSON.parse(JSON.stringify(Board));
for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(tmpchkboard.length>row && row >= 0){
if(tmpchkboard[0].length>col && col >= 0){
if(val){
tmpchkboard[row][col]=0;
}
}
}
}
}
for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];

//~ var curalt=RotationAlterations[xi];
//~ if(RotationAlterations[xi]<0){curalt=curalt*-1;}
//~ rowalteration=Math.floor((curalt)/shaperows);
//~ colalteration=(((curalt)%shaperows));


rowalteration=RotationVectors[tmppieceRot][xi][0];
colalteration=RotationVectors[tmppieceRot][xi][1];


//~ if(RotationAlterations[xi]<0){
//~ rowalteration=rowalteration*-1;
//~ colalteration=colalteration*-1;
//~ }
if(val){
if(tmpchkboard.length>row+rowalteration && row+rowalteration >= 0){
if(tmpchkboard[0].length>col+colalteration && col+colalteration >= 0){
if(tmpchkboard[(row+rowalteration)][(col+colalteration)]==1){
console.log('cant rotate'+(row)+", "+(col+1));
console.log('False'+(row)+", "+(col+1));
clearForMove=false;
}
}else{
console.log('cant rotate'+(row)+", "+(col+1));
console.log('False'+(row)+", "+(col+1));
clearForMove=false;
}
}else{
console.log('cant rotate'+(row)+", "+(col+1));
console.log('False'+(row)+", "+(col+1));
clearForMove=false;
}

}
}
xi++;
}
}else{
console.log('False'+(row)+", "+(col+1));
clearForMove=false;
}
return clearForMove;
}
	
	
		
	
function RotatePiece(){
if(!inRotate){

var okToMove=checkRotatePiece();
//~ var okToMove=true;
 console.log("ok to rotate :"+okToMove);
if(okToMove){
inRotate=true;
var lastRotLevel=0;
var newRotLevel=0;
if(pieceInPlayROT==0){
// rot to 90
//~ pieceInPlayPOS
pieceInPlayROT=90;
newRotLevel=1;
}else if(pieceInPlayROT==90){
// rot to 180
pieceInPlayROT=180;
lastRotLevel=1;
newRotLevel=2
}else if(pieceInPlayROT==180){
// rot to 270
pieceInPlayROT=270;
lastRotLevel=2;
newRotLevel=3
}else if(pieceInPlayROT==270){
// rot to 0
pieceInPlayROT=0;
lastRotLevel=3;
newRotLevel=4
}

var tmpchkpieceInPlayPOS=JSON.parse(JSON.stringify(pieceInPlayPOS));




var shaperows=4;
var xi=0;
var tmpchkboard=JSON.parse(JSON.stringify(Board));
for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ //console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];
if(tmpchkboard.length>row && row >= 0){
if(tmpchkboard[0].length>col && col >= 0){
if(val){
Board[row][col]=0;
}
}
}
}
}
for(x=(pieceInPlayPOS.length-1);x>=0;x--){
//~ console.log(x);
if(pieceInPlayPOS[x].length==3){
var row=pieceInPlayPOS[x][0];
var col= pieceInPlayPOS[x][1];
var val= pieceInPlayPOS[x][2];

//~ var curalt=RotationAlterations[xi];
//~ if(RotationAlterations[xi]<0){curalt=curalt*-1;}
//~ rowalteration=Math.floor((curalt)/shaperows);
//~ colalteration=(((curalt)%shaperows));
//~ pieceInPlayROT=90;

rowalteration=RotationVectors[pieceInPlayROT][xi][0];
colalteration=RotationVectors[pieceInPlayROT][xi][1];

//~ if(RotationAlterations[xi]<0){
//~ rowalteration=rowalteration*-1;
//~ colalteration=colalteration*-1;
//~ }
if(tmpchkboard.length>row+rowalteration && row+rowalteration >= 0){
if(tmpchkboard[0].length>col+colalteration && col+colalteration >= 0){

if(val){
//pieceInPlayPOS[x][0]=row+rowalteration;
//pieceInPlayPOS[x][1]=col+colalteration;
Board[(row-(rowalteration*lastRotLevel)+(rowalteration*newRotLevel))][(col-(colalteration*lastRotLevel)+(colalteration*newRotLevel))]=val;
//~ Board[(row)][(col+colalteration)]=val;
//~ Board[(row)][(col+colalteration)]=val;
//~ Board[(row+rowalteration)][(col)]=val;

//~ console.log("xi["+xi+"] val["+val+"] row: ["+row+"] rowalteration["+rowalteration+"] col: ["+col+"] colalteration["+colalteration+"]");
console.log("xi["+xi+"] newRotLevel["+newRotLevel+"]  lastRotLevel["+lastRotLevel+"] rowalteration["+rowalteration+"] colalteration["+colalteration+"]");


//~ console.log('x: '+x);
//~ console.log('xi: '+xi);
//~ console.log('RotationAlterations[xi]: '+RotationAlterations[xi]);
pieceInPlayPOS[x][0]=row-(rowalteration*lastRotLevel)+(rowalteration*newRotLevel);
//~ pieceInPlayPOS[x][0]=row;
//~ pieceInPlayPOS[x][1]=col;
pieceInPlayPOS[x][1]=col-(colalteration*lastRotLevel)+(colalteration*newRotLevel);
pieceInPlayPOS[x][2]=val;
//~ tmpchkpieceInPlayPOS[(x+RotationAlterations[xi])][0]=row+rowalteration;
//~ tmpchkpieceInPlayPOS[(x+RotationAlterations[xi])][1]=col+colalteration;
//~ tmpchkpieceInPlayPOS[(x+RotationAlterations[xi])][2]=val;



//~ console.log("xi["+xi+"] ["+row+","+col+"] - to - ["+pieceInPlayPOS[x][0]+","+pieceInPlayPOS[x][1]+"]");
}

}}


}
xi++;
}
//pieceInPlayPOS=new Array();
//~ Board=JSON.parse(JSON.stringify(tmpchkboard));

//~ pieceInPlayPOS=JSON.parse(JSON.stringify(tmpchkpieceInPlayPOS));

console.log('Rot: '+pieceInPlayROT);
inRotate=false;
displayTetrisBoard();
}
}
	
	}
	
	
function Piece(shape) {
	this.shape=shape;
    this.PieceInfo= function () {
        return this.type;
    }
}
</script>

<style>

</style>

<select id="TetrisBoardType" onchange="javascript: this.blur();changeBoardType(this.value)";>
<option>Binary</option>
<option>CSV</option>
<option SELECTED="SELECTED">Graphical</option>
</select>
<select id="TetrisBoardDifficulty" onchange="javascript: this.blur();changeBoardDifficulty(this.value)";>
<option value="4">Easy</option>
<option SELECTED="SELECTED" value="10">Normal</option>
<option value="25">Hard</option>
<option value="50">Insaine</option>
</select>
<div id="TetrisBoard">
</div>