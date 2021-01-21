/* a Pen by Diaco m.lotfollahi  : https://diacodesign.com */

var box=document.querySelectorAll('.box'),indx=box.length-1,Anim ;

for(var i=box.length;i--;){
	box[i].anim = TweenLite.to(box[i],0.7,{yPercent:-100,paused:true});
};

document.addEventListener("mousewheel",Go);
document.addEventListener("DOMMouseScroll",Go);

var D = document.createElement('div');
Draggable.create(D,{
	trigger:".box",type:'y',minimumMovement:5,cursor:'n-resize',
	onDrag:function(){ var X=this.getDirection("start")=='up'?1:-1;  Go(X);}
});

function Go(e){
	var SD=isNaN(e)?e.wheelDelta||-e.detail:e;
	if(SD>0 && indx>0 ){
		if(!Anim||!Anim.isActive()){Anim=box[indx].anim.play();  indx--;}
	}else if(SD<0 && indx<box.length-1){
		if(!Anim||!Anim.isActive()){indx++;  Anim=box[indx].anim.reverse();}
	};
	if(isNaN(e))e.preventDefault();
};

/* a Pen by Diaco m.lotfollahi  : https://diacodesign.com */