<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Candlestick Chart </h3>
															    <div id="center"><div id="fig">
																<script type="text/javascript+protovis">

															/* Parse dates. */
															var dateFormat = pv.Format.date("%d-%b-%y");
															vix.forEach(function(d) d.date = dateFormat.parse(d.date));

															/* Scales. */
															var w =1220,
																h = 300,
																x = pv.Scale.linear(vix, function(d) d.date).range(0, w),
																y = pv.Scale.linear(vix, function(d) d.low, function(d) d.high).range(0, h).nice();

															var vis = new pv.Panel()
																.width(w)
																.height(h)
																.margin(10)
																.left(30);

															/* Dates. */
															vis.add(pv.Rule)
																 .data(x.ticks())
																 .left(x)
																 .strokeStyle("#eee")
															   .anchor("bottom").add(pv.Label)
																 .text(x.tickFormat);

															/* Prices. */
															vis.add(pv.Rule)
																 .data(y.ticks(7))
																 .bottom(y)
																 .left(-10)
																 .right(-10)
																 .strokeStyle(function(d) d % 10 ? "#ddd" : "#ddd")
															   .anchor("left").add(pv.Label)
																 .textStyle(function(d) d % 10 ? "#999" : "#ddd")
																 .text(y.tickFormat);

															/* Candlestick. */
															vis.add(pv.Rule)
																.data(vix)
																.left(function(d) x(d.date))
																.bottom(function(d) y(Math.min(d.high, d.low)))
																.height(function(d) Math.abs(y(d.high) - y(d.low)))
																.strokeStyle(function(d) d.open < d.close ? "#052963" : "#00C6D7")
															  .add(pv.Rule)
																.bottom(function(d) y(Math.min(d.open, d.close)))
																.height(function(d) Math.abs(y(d.open) - y(d.close)))
																.lineWidth(10);

															vis.render();

																</script>
																	<script type="text/javascript" src="js/protovis-d3.2.js"></script>
																	<script type="text/javascript" src="js/vix.js"></script>

															</div>
														</div>
																				
															</div>
															
														</div>