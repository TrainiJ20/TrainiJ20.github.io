<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
        <title>GTN - Algorithm</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <br><br>
        <div class="container">
            <h1>The Algorithm</h1>
            <h2>Pseudocode</h2>
            <pre class="code">
    BEGIN guessTheNumber
        get guess_range
        target = random number between 1 and guess_range
        display "You must guess a number between 1 AND " guess_range
        max_attempts = 0
        x = 1

        WHILE random <= guess_range
            x = x * 2
            max_attempts += 1
        ENDWHILE

        attempts = 0

        REPEAT
            get guess
            IF guess > target THEN
                display "Lower"
            ELSE
                IF guess < target THEN
                    display "Higher"
                ENDIF
            ENDIF
            attempts += 1
        UNTIL guess = target OR max_attempts = attempts

        IF guess = target:
            display "Correct! You made " + attempts + " guesses."
        ELSE
            display "Game over! The number is " + target + "."
        ENDIF
    END guessTheNumber
            </pre><br>

            <h2>Flowchart</h2>

            <div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;lightbox&quot;:false,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile userAgent=\&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36\&quot; version=\&quot;8.6.6\&quot; editor=\&quot;www.draw.io\&quot; type=\&quot;device\&quot;&gt;&lt;diagram id=\&quot;c106de2a-6604-ee44-7bd7-7341a109ffc9\&quot; name=\&quot;Page-1\&quot;&gt;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&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
            <script type="text/javascript" src="https://www.draw.io/js/viewer.min.js"></script>
            <br><br>
            <p>This advanced algorithm has been through rigorous testing and has proven to work effectively and efficiently.</p><br>
            <a href="proof.php" class="large button">Find out how!</a>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
