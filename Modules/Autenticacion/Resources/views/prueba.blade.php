<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
    <style>
        .example .tf-nc {
            /* css here */
        }

        .tf-custom .tf-nc:before,
        .tf-custom .tf-nc:after {
            /* css here */
        }

        .tf-custom li li:before {
            /* css here */
        }
    </style>
</head>
<body>
<div class="tf-tree example">
    <ul>
        <li>
            <span class="tf-nc">1</span>
            <ul>
                <li>
                    <span class="tf-nc">2</span>
                    <ul>
                        <li>
                            <span class="tf-nc">3</span>
                            <ul>
                                <li><span class="tf-nc">4</span></li>
                                <li><span class="tf-nc">6</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="tf-nc">3</span>
                    <ul>
                        <li><span class="tf-nc">7</span></li>
                        <li><span class="tf-nc">8</span></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

</body>
</html>
