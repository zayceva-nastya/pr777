<div class="default">
    <div class="gridBox">
        <div class="bg-black box1">HomeFit
            <div>Get in shape with us</div>
        </div>
        <div class="box2"><img id="mainStrImg" src="../public/image/devushka-beg-cvet.jpg">
        </div>
        <br>
        <div class="box3">
            <div class="media"><img class="icons" src="../public/image/clock.png">
                <p>Save time and money! Study at home!</p>
            </div>
            <div class="media"><img class="icons" src="../public/image/stanga.jpg">
                <p>Create your own plan.Do what you like!</p></div>
            <div class="media"><img class="icons" src="../public/image/child.png">
                <p>Let's make this world healthier and more beautiful!</p></div>
        </div>
        <div class="box4">We always welcome new guests!</div>
    </div>
    <?php
    if($_SESSION['user']['cod']==='user'){
        echo   "<div class='foot'><p class='randplan'>Don't know where to start? Let us help you! Keep three trial training
            sessions for the beginner!</p>
        <a class='workout1' href='?action=plana&type=diaryid'>WORKOUTS 1</a>
        <a class='workout2' href='?action=planb&type=diaryid'>WORKOUTS 2</a>
        <a class='workout3' href='?action=planc&type=diaryid'>WORKOUTS 3</a>
    </div>";
    }
    ?>

    <div class="infofooter">
        <p>The final work 2020</p>
        <p>HomeFit</p>
    </div>
</div>