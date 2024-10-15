				<div id="sliderinformation">
    <ul>
        <li><a href="#tab-1"></a></li>
        <li><a href="#tab-2">Features</a></li>
        <li><a href="#tab-3">Comments</a></li>
        <li><a href="#tab-4">yooooo</a></li>
    </ul>
 
    <div id="tab-1">
        <h3>Pierna</h3>
        <p>.</p>
        <p>.</p>
        <p>.</p>
    </div>
    <div id="tab-2">
        <h3>Features</h3>
        <ul>
            <li>Feature 1</li>
            <li>Feature 2</li>
            <li>Feature 3</li>
        </ul>
    </div>
    <div id="tab-3">
        <h3>Comments</h3>
        <ul>
            <li>Comment 1</li>
            <li>Comment 2</li>
            <li>Comment 3</li>
        </ul>

        <div id="tab-4">
        <h3>yooooo</h3>
        <ul>
            <li>Comment 1</li>
            <li>Comment 2</li>
            <li>Comment 3</li>
        </ul>
    </div>
</div>

<script>
$(document).ready(function(){
    var slider = $("#sliderinformation").sliderTabs();
});
</script>