var  iCounter =0,totalCounter=0,  maxSize=8,  sandBox=$('#Mmain'),height=80,marginBottom=230,
boxList=$(".box"),box1List=document.getElementsByClassName("box1");
(function() {
    $("#action").click(addBoxes);
    boxList.click(function(event){openCard(event)});
})();


function addBoxes(){
  if(totalCounter==8){
    return;
  }
  console.log(boxList.length);
  for(iCounter=0;iCounter<3&&totalCounter<8;iCounter++,totalCounter++){
    sandBox.append($('<div>').css({"height":height.toString()+"px","width":height.toString()+"px",
    "margin-bottom":marginBottom.toString()+"px"}).addClass("box generBox").html(iCounter.toString()));
    height+=20;
    marginBottom-=20;   
}
updateBoxList();

}
function updateBoxList(){
    boxList=$(".box");
    boxList.click(openCard);//click(openCard);
}
function openCard(eve){
    //console.log("catch");
    //console.log(eve.target.innerHTML);
    eve.target.classList.remove("box");
    eve.target.classList.add("box1");
    updateBoxList();
    box1List=document.getElementsByClassName("box1");
    if(box1List.length==2){
      var isMatch;
      (box1List[0].innerHTML==box1List[1].innerHTML)?(isMatch=true):(isMatch=false)
      if(isMatch==true){
        console.log("match");
        console.log( box1List[0]);
        for(i=0;i<2;++i){
          box1List[i].classList.add("exposedBox");
          box1List[i].classList.remove("box1");
        }
      }
      else{
        console.log("not match");
        console.log( box1List[0]);
        for(i=0;i<2;++i){
          box1List[i].classList.add("box");
          box1List[i].classList.remove("box1");
        }
        box1List=document.getElementsByClassName("box1");
      }
      updateBoxList();
      box1List=document.getElementsByClassName("box1");
      console.log("done");

    }
}

