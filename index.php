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

//alterations to apply to piece in play to get the rotation you want
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
//our representation of the game
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

//~ var Nextpiece=Shapes[Math.floor(Math.random() * ( Shapes.length+1 ))];

document.onkeydown = KeyPressHandler;
//~ document.onkeyup = KeyPressHandler;
//settings
var curinterval=1000;//interval between steps
var mininterval=150;//the shortest teh interval between steps can be
var curintervalStep=1;//how fast the steps speed up
var IntervalController=setTimeout(Update, curinterval);//controls teh timing of our updates
var GameOver=false;//have we lost yet
var GOAlready=false;//already asked if you want to retry
var inRotate=false;//currently applying rotation alterations to piece in play
var buildingPiece=false;//making a new piece to put in play
var pieceInPlay=false;//is tehre still a piece under our controll
var pieceInPlayPOS=new Array();//positioning details of the current piece we are controlling
var pieceInPlayROT=0;//rotation details of the current piece we are controlling




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



function Update(){

if(!GameOver){
if(!pieceInPlay && !buildingPiece){
if(checkFilledRow()){//if you filled a entire row delete that row and let everythign else move down
console.log("Filled Row");
}
putPieceInPlay();//put the next piece  in play and activate control
}

if(pieceInPlay && pieceInPlayPOS.length>0){
movePieceDown();//each step move piece down ... like gravity
}


}else{

//check if user wants to retry
if(!GOAlready && confirm("Game Over, Try Again?")){
window.location.reload();//reload page
}else{
GOAlready=true;//dont restart
}

}

displayTetrisBoard();//build the visual representation of the game

//if we havent reached our max speed them ramp up the speed by our interval
if(curinterval>mininterval){
curinterval=curinterval-curintervalStep;
}
IntervalController=setTimeout(Update, curinterval);//set the update interval to the new timing
	
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

//build new board minus our filled rows if any
var tmpbrdaltered=HandleFilledRows(tmpbrd,0,false);
hasfilledRow=tmpbrdaltered[0];
tmpbrd=tmpbrdaltered[1];

Board=JSON.parse(JSON.stringify(tmpbrd));//apply new board
return hasfilledRow;
}



//verify that if we move the piece right it doesnt run into any other blocks or go off of our board
function checkMovePieceRight(){

var clearForMove=true;


if(pieceInPlay){
var tmpchkboard=JSON.parse(JSON.stringify(Board));

//itterate through shape information and remove piece from a temp game board for checking
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
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
	if(pieceInPlayPOS[x].length==3){
	var row=pieceInPlayPOS[x][0];
	var col= pieceInPlayPOS[x][1];
	var val= pieceInPlayPOS[x][2];
	var nextColVal=((x+1<pieceInPlayPOS.length && parseInt(x+1%4)>0)? pieceInPlayPOS[x+1][2]: 0);

		if(val){
		if((col+1)>=Board[0].length || (tmpchkboard[row][(col+1)]==1)){
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


//apply position change to the piece in play
function movePieceRight(){
var okToMove=checkMovePieceRight();
if(okToMove){
//itterate through shape information and remove piece from game board
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
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
 //set new position information for the pice in play we moved
	for(x=0;x<pieceInPlayPOS.length;x++){
	var row=pieceInPlayPOS[x][0];
	var col= pieceInPlayPOS[x][1];
	var val= pieceInPlayPOS[x][2];
	if(val){
	Board[row][(col+1)]=1;
	}
	pieceInPlayPOS[x][0]=row;
	pieceInPlayPOS[x][1]=col+1;
	}
}
displayTetrisBoard();
}

//verify that if we move the piece left it doesnt run into any other blocks or go off of our board
function checkMovePieceLeft(){

var clearForMove=true;

if(pieceInPlay){
var tmpchkboard=JSON.parse(JSON.stringify(Board));
//itterate through shape information and remove piece from a temp game board for checking
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
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
	if(pieceInPlayPOS[x].length==3){
	var row=pieceInPlayPOS[x][0];
	var col= pieceInPlayPOS[x][1];
	var val= pieceInPlayPOS[x][2];
	var prevColVal=((x>0 && parseInt(x/4)<4)? pieceInPlayPOS[x-1][2]: 0);
		if(val){
		if((col)<1 || (tmpchkboard[row][(col-1)]==1 && prevColVal==0)){
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
if(okToMove){
//itterate through shape information and remove piece from game board
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
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

//set new position information for the piece in play we moved
	for(x=0;x<pieceInPlayPOS.length;x++){
	var row=pieceInPlayPOS[x][0];
	var col= pieceInPlayPOS[x][1];
	var val= pieceInPlayPOS[x][2];
	if(val){
	Board[row][(col-1)]=1;
	}
	pieceInPlayPOS[x][0]=row;
	pieceInPlayPOS[x][1]=col-1;
	}
}
displayTetrisBoard();
}




//verify that if we move the piece down it doesnt run into any other blocks or go off of our board
function checkMovePieceDown(){

var clearForMove=true;

if(pieceInPlay){
var tmpchkboard=JSON.parse(JSON.stringify(Board));

//itterate through shape information and remove piece from a temp game board for checking
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
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
	if(pieceInPlayPOS[x].length==3){
	var row=pieceInPlayPOS[x][0];
	var col= pieceInPlayPOS[x][1];
	var val= pieceInPlayPOS[x][2];
	var nextRowVal=((x<((pieceInPlayPOS.length)-4))? pieceInPlayPOS[x+4][2]: 0);

		if(val){
		if((row+1)>=Board.length || (tmpchkboard[(row+1)][col]==1) ){
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
if(okToMove){
//itterate through shape information and remove piece from game board
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
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

 //set new position information for the piece in play we moved
	for(x=0;x<pieceInPlayPOS.length;x++){
	var row=pieceInPlayPOS[x][0];
	var col= pieceInPlayPOS[x][1];
	var val= pieceInPlayPOS[x][2];
	if(val){
	Board[(row+1)][col]=1;
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

//build a new piece and apply control
function putPieceInPlay(){
buildingPiece=true;
pieceInPlayPOS=new Array();
pieceInPlayROT=0
var Nextpiece=getNextPiece();
var row=0;
//itterate through shape information and build piece on game board
	for(x=0;x<Nextpiece.length;x++){
	if(x+1>4){row=parseInt(x/4);}
	var col=((x+1>3)? (x%4)+3:x+3);
		if(Nextpiece[x]==1){
		if(Board[row][col]==0){
		Board[row][col]=1;
		}else{
		GameOver=true;
		}
		}
	pieceInPlayPOS[pieceInPlayPOS.length]=new Array(row,col,Nextpiece[x]);
	}
pieceInPlay=true;
buildingPiece=false;
}



//not used ... yet ... the idea is to replace a shape in place with different shape
function alterPieceInPlay(Nextpiece){

var xi=0;
var tmpchkboard=JSON.parse(JSON.stringify(Board));

//itterate through shape information and remove piece from a temp game board for checking
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
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
var row=0;
//itterate through shape information and build piece on a temp game board
	for(x=0;x<Nextpiece.length;x++){
	if(x+1>4){row=parseInt(x/4);}
	if(Nextpiece[x]==1){
	var col=((x+1>3)? (x%4)+3:x+3);
	if(tmpchkboard[Initrow+row][Initcol+col]==0){
	tmpchkboard[Initrow+row][Initcol+col]=1;
	}
	}
	pieceInPlayPOS[pieceInPlayPOS.length]=new Array(Initrow+row,Initcol+col,Nextpiece[x]);
	}
Board=JSON.parse(JSON.stringify(tmpchkboard));
pieceInPlay=true;
}




//change the speed in which teh game steps increase in frequency
function changeBoardDifficulty(newDifficulty){
curintervalStep=newDifficulty;
}

//change visual representation of game board
function changeBoardType(boardType){
TetrisBoardType=boardType;
}


//controll the different types of displaying the game board
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


//build csv game view
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


//build binary game view
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


//build html table game view
function displayTetrisBoardGraphical(){
var TetrisBoardHtml='<table border="1" style="border: solid 2px #000000;">';
aStyle=' style="'+"width: 30px;height: 30px;background-color: rgb(13, 121, 172);"+'"';//active style // when block is filled
naStyle=' style="'+"width: 30px;height: 30px;background-color: rgb(255, 255 255);"+'"';//not active style // when block is empty

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


//select the next game riece at random from a list of our available shapes
function getNextPiece(){
var tmp = Math.floor(Math.random() * ( Shapes.length-0.1 ));
console.log('shape: '+tmp);
	return Shapes[tmp];
	}
	
	
	
	

//verify that if we rotate the piece it doesnt run into any other blocks or go off of our board
function checkRotatePiece(){
var clearForMove=true;

if(pieceInPlay){
var tmppieceRot=pieceInPlayROT;

if(pieceInPlayROT==0){
// rot to 90
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
//itterate through shape information and remove piece from a temp game board for checking
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
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
	
//itterate through shape information and build piece on a temp game board for checking
//apply rotationVectors //effectivly rotating the piece as a whole
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
	if(pieceInPlayPOS[x].length==3){
	var row=pieceInPlayPOS[x][0];
	var col= pieceInPlayPOS[x][1];
	var val= pieceInPlayPOS[x][2];

	rowalteration=RotationVectors[tmppieceRot][xi][0];
	colalteration=RotationVectors[tmppieceRot][xi][1];
		if(val){
		if(tmpchkboard.length>row+rowalteration && row+rowalteration >= 0){
		if(tmpchkboard[0].length>col+colalteration && col+colalteration >= 0){
		if(tmpchkboard[(row+rowalteration)][(col+colalteration)]==1){
		//~ console.log('cant rotate'+(row)+", "+(col+1));
		clearForMove=false;
		}
		}else{
		//~ console.log('cant rotate'+(row)+", "+(col+1));
		clearForMove=false;
		}
		}else{
		//~ console.log('cant rotate'+(row)+", "+(col+1));
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
if(okToMove){
inRotate=true;
var lastRotLevel=0;
var newRotLevel=0;
if(pieceInPlayROT==0){
// rot to 90
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
//itterate through shape information and remove piece from game board
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
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
	
	//set new rotation information for the piece in play we moved
	//apply rotationVectors //effectivly rotating the piece as a whole
	for(x=(pieceInPlayPOS.length-1);x>=0;x--){
	if(pieceInPlayPOS[x].length==3){
	var row=pieceInPlayPOS[x][0];
	var col= pieceInPlayPOS[x][1];
	var val= pieceInPlayPOS[x][2];

	rowalteration=RotationVectors[pieceInPlayROT][xi][0];
	colalteration=RotationVectors[pieceInPlayROT][xi][1];

	if(tmpchkboard.length>row+rowalteration && row+rowalteration >= 0){
	if(tmpchkboard[0].length>col+colalteration && col+colalteration >= 0){

	if(val){
	Board[(row-(rowalteration*lastRotLevel)+(rowalteration*newRotLevel))][(col-(colalteration*lastRotLevel)+(colalteration*newRotLevel))]=val;
	//~ console.log("xi["+xi+"] newRotLevel["+newRotLevel+"]  lastRotLevel["+lastRotLevel+"] rowalteration["+rowalteration+"] colalteration["+colalteration+"]");
	pieceInPlayPOS[x][0]=row-(rowalteration*lastRotLevel)+(rowalteration*newRotLevel);
	pieceInPlayPOS[x][1]=col-(colalteration*lastRotLevel)+(colalteration*newRotLevel);
	pieceInPlayPOS[x][2]=val;
	}

	}}


	}
	xi++;
	}
	
//console.log('Rot: '+pieceInPlayROT);
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