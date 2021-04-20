
//initailizing variables
const questionnum=document.querySelector(".question_num_value");
const total=document.querySelector(".total_ques_num");
const ques=document.querySelector(".question");
const options=document.querySelector(".options").children;
const op1=document.querySelector(".option1");
const op2=document.querySelector(".option2");
const op3=document.querySelector(".option3");
const op4=document.querySelector(".option4");
const qover=document.querySelector(".quiz_over");
const mark=document.querySelector(".mark");
const totalques=document.querySelector(".totalquestions");
const percent=document.querySelector(".percentage");
let question_index;
let index=0;
let myarray=[];
let score=0;
var questions;
//setting question options and question number
function load()
{
	ques.innerHTML=questions[question_index].q;
	op1.innerHTML=questions[question_index].options[0];
	op2.innerHTML=questions[question_index].options[1];
	op3.innerHTML=questions[question_index].options[2];
	op4.innerHTML=questions[question_index].options[3];
	total.innerHTML=questions.length;
	questionnum.innerHTML=index+1;
	index++;
}
function randomquestion()
{
	let randomnum=Math.floor(Math.random()*questions.length);
	let flag=0;
	if(index==questions.length)
		quizover();
	else
	{
		if(myarray.length>0)
		{
			for(let i=0;i<myarray.length;i++)
				if(myarray[i]==randomnum)
				{
					flag=1;
					break;
				}
			if(flag==1)
				randomquestion();
			else
			{
				question_index=randomnum;
				load();
			}
		}
		if(myarray.length==0)
		{
			question_index=randomnum;
			load();
		}
		myarray.push(question_index);
		console.log(index);
	}
}
function check(element)
{
	if(element.id==questions[question_index].answer)
	{
		element.classList.add("correct");
		score++;
	}
	else
		element.classList.add("wrong");
	disabledoptions();
}
function disabledoptions()
{
	for(let i=0;i<options.length;i++)
	{
		options[i].classList.add("disabled");
		if(options[i].id==questions[question_index].answer)
			options[i].classList.add("correct");
	}
}
function next()
{
	validate();
}
function validate()
{
	if(!options[0].classList.contains("disabled"))
		alert("please select one option");
	else
	{
		enabledoptions();
		randomquestion();
	}
}
function enabledoptions()
{
	for(let i=0;i<options.length;i++)
	{
		options[i].classList.remove("disabled","correct","wrong");
	}
}
function quizover()
{
	qover.classList.add("show");
	mark.innerHTML=score;
	totalques.innerHTML=questions.length;
	percent.innerHTML=(score/questions.length)*100 + "%";
	var t=questions.length;
	const tosend={marks:score,domain:domain,total:t};
	const jsonstg=JSON.stringify(tosend);
	console.log(jsonstg);
	const xhr=new XMLHttpRequest();
	xhr.open('POST','cal.php');
	xhr.setRequestHeader("Content-Type","application/json");
	xhr.send(jsonstg);
}
function tryagain()
{
	window.location.reload();
}
window.onload=function()
{
	randomquestion();
}

	


	