
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
var timer = setInterval(function() {
if (timeoutPeriod > 1) {
timeoutPeriod -= 1;
document.getElementById("countdown").innerHTML = timeoutPeriod;
} else {
clearInterval(timer);
location.reload();
};
}, 1000);
};
timedRefresh(31);
</script>



<div class="row-fluid">
    <div style="text-align: right; margin-bottom: -5rem; padding-top: 1.5rem;"><h6>Auto refresh in <span id="countdown"></span> seconds&nbsp;</h6><br></div>
    {!! $this->renderList() !!}
</div>

