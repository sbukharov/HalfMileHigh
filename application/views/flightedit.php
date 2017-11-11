<h1>Flight {accode}</h1>
<form role="form" action="/flights/submit" method="post">
    {ffrom}<br/>
    {fto}<br/>
    {fdistance}<br/>
    {fdate}<br/>
    {faccode}<br/>
    {zsubmit}    
</form>
    {error}
<a href="/flights/cancel"><input type="button" value="Cancel the current edit"/></a>
<a href="/flights/delete"><input type="button" value="Delete Flight"/></a>