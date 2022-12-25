function klik(x)
{
    var textpin = document.getElementById("pinpole");
    const num =
    [
        '1','2','3',
        '4','5','6',
        '7','8','9',
        'c'
    ]
    for(let i = 0; i <= 8; i++)
    {
        if(x == num[i] && textpin.value.length <= 8)
        {
            textpin.value = textpin.value + num[i];
            break;
        } 
        else if(x==num[9])
        {
            textpin.value = "";
        }


    }


}
function klik_OK()
{
    document.getElementById("ok").
    addEventListener("click", function() 
    {
    document.getElementById("go").click();
    });
}