@extends('layouts.app')


<a href="http://www.b24.ee/" target="_blank">b24.ee</a> visitor counter for current month: <counter />

<script type="text/javascript">
var t = new Date();
var todaysVisitors = (t.getHours() + t.getMinutes()) * t.getDate(); // kinda retarded, as it decreases every full hour
var currentCounterValue = getDaysBaseAmount(t.getDate()) + todaysVisitors;
$('counter').text(currentCounterValue);

function getDaysBaseAmount(day) {
var INITIAL_AMOUNT = 917;
var dailyAdditions = [];
for(var i = 1; i <= day; i++) {
  if(i === 1) {
    dailyAdditions[i] = INITIAL_AMOUNT;
  }
  else if(i % 11 === 6) {
    dailyAdditions[i] = dailyAdditions[i - 1] + 1;
  }
  else if(i % 11 === 7) {
    dailyAdditions[i] = dailyAdditions[i - 1] + 3;
  }
  else {
    dailyAdditions[i] = dailyAdditions[i - 1] + 2;
  }
}

return dailyAdditions.reduce(
  function(prev, curr) { return prev + curr }, 0);
}
</script>

@section('footer')
  <div class="container-fluid">
    <div class="footer">
      <div class="pull-right">
        &copy; 2017, HiphyTanny | with love from <a href="http://a1digitalsystems.com">A1-Digital Systems</a>
      </div>
    </div>
  </div>
@endsection
