const button=document.querySelector('#dugme');
function openLink(button)
{
    button.addEventListener('click',function(e)
    {
        window.open(button.getAttribute("data-link"),'_self');
    })
}
openLink(button);