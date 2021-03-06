<?php
$title="Home";
include("header.inc");
?>

<div class="span-24 last">
	<h2>Welcome</h2>
</div>

<div class="span-16 append-1">


My name is Andrew Leifer and I graduated from <a href="http://www.stanford.edu">Stanford University</a> with degrees in Physics, Political Science and honors in International Security Studies.  I recently defended my doctoral thesis in Biophysics at <a href="http://www.harvard.edu">Harvard University</a>. I conduct behavioral neuorscience research in the <a href="http://worms.physics.harvard.edu">Samuel Lab</a> where I develop new optogenetic techniques to probe the neurocircuitry of the brain. Most everyone calls me Andy. Feel free to contact me at:
<a href="mailto:leifer@fas.harvard.edu">leifer@fas.harvard.edu</a>

<hr class="space">
<h2>News</h2>
<h4>16 January 2011</h4>
My work on the <a href="http://colbert.physics.harvard.edu">CoLBeRT</a> system, an instrument to control neurons of a worm as it moves, got published today in <i>Nature Methods</i>. It got a bit of press at <a href="http://www.sciencenews.org/view/generic/id/68860/description/Making_a_worm_do_more_than_squirm" target="_blank"><i>Science News</i></a> and <a href="http://www.scientificamerican.com/article.cfm?id=single-worm-neurons" target="_blank"><i>Scientific American</i></a>.

<h4>Twitter News from <a href="http://twitter.com/#!/AndrewLeifer" target="_blank">@AndrewLeifer</a>:</h4>
<!-- Modified Twitter script available at https://github.com/aleifer/clean-twitter-widget -->
<!-- Forked from https://github.com/fad/clean-twitter-widget -->
<script type="text/javascript" charset="utf-8">	
</script>
<script src="./javascript/twitter-widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 3, /*Number of tweets to show */
  interval: 6000,
  width: 630,
  height: 100,
  theme: {
    shell: {
      background: '#ec4b00',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#3d393d',
      links: '#ec4b00'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: false,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('AndrewLeifer').start();
</script>
<script type="text/javascript" charset="utf-8">	
</script>
<script src="./javascript/twitter-widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 6000,
  width: 630,
  height: 100,
  theme: {
    shell: {
      background: '#ec4b00',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#3d393d',
      links: '#ec4b00'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: false,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('AndrewLeifer').start();
</script>

</div>



<div class="span-7 last">
<div class="box">
<img src="images/fbook_pic.png" width="222">
</div>

</div>

<?php
include("footer.inc");
?>
