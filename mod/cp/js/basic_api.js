
xMousePos=0;
yMousePos=0;

function updateMousePosition(event)
{
xMousePos=_rt().getMouseX(event);
yMousePos=_rt().getMouseY(event);
}
//------------------------------------------------------------------------------

function preloadImage(src)
{
	t = new Image();
	t.src=src;
}

//------------------------------------------------------------------------------

function question(a)
{
if(confirm('Вы уверены?'))
document.location=a
}

//------------------------------------------------------------------------------

function show(a)
{
t=document.getElementById(a)
t.style.display='inline'
t.style.visibility='visible'
}
function hide(a)
{t=document.getElementById(a)
t.style.display='none'
t.style.visibility='hidden'
}
function show_hide(id)
{
t=document.getElementById(id)
if(t.style.display=='none')
{show(id);return 1;}
else
{hide(id);return 0;}
}

function delimiter_collapse(cls)
{
	if(delimiter.className == 'tree_opened') delimiter.className = 'tree_closed';
	else delimiter.className = 'tree_opened';
	{
		{
			obj.style.visibility='visible';
			return 1;
		}
		else
		{
			obj.style.visibility='hidden';
			return 0;
		}


//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
