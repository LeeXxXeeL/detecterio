<!DOCTYPE html>
<html lang="en">
<head>

    <title>Oh, there is a problem</title>
    <style>
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }

        .background {
        }


        .g-recaptcha{
            margin: 15px auto !important;
            width: auto !important;
            height: auto !important;
            text-align: -webkit-center;
            text-align: -moz-center;
            text-align: -o-center;
            text-align: -ms-center;
        }
    </style>
</head>

<body class="background">
<div class="centered" style="color:white;">
    <div style="margin-bottom:50px;    text-align: center;">
        <img style="height:100px;" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAD6CAMAAAC/MqoPAAACH1BMVEUAAADT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09MEaX9hAAAAtHRSTlMAAQIDBAUGBwgJCgsMDQ4PEBESExQVFhcYGRobHB0eHyAhIiMkJicoKSorLC0uLzAxMzQ1Njc4Ojs8PT4/QEFDREVGR0lKS0xNTk9QUVJUVVZXWFlbXF1fYWJjZmdoaWtsbW9wcXN0dXd4e36Cg4WGiYuMjo+RkpSVl5iam52eoKKjpaaoqqutr7CytLW3ubq8vsDBw8XHyMrMzs/R09XX2drc3uDi5Obo6evt7/Hz9ff5+/3SLZAoAAAIMElEQVR42u3d+UPURhQH8En2YAFBVG5RsCCKIh5UeuCFgIoX1YIHar0KFrVQUVsQr1qtbQEvtPVEaQVFF2Th/YH9AcoGyMwmMZu8Ke/7684M+bC7ySSZfWHM5gRuNAWY7dl6p5ShzzmAYKLdgzYAQDZ6ehcAPLR5zFQAgNXo6Y0AAJ/aO2YHAEAAPT0dAKBPtXPIAgCARvzfdfYTAMAuGwdUegBg2C8BPR4AYNhn34CbAAB2MxlyFADglG3DeYK2f4OiFu8gAIBtB7hDAADFTI5UAABctWmw2NEoHC2jFuUVAMBCewZrsXEsB1IItr1TqQAAl5k86bJtXtMBAJAgEd22eU0BAEA9kykXxPMa1Z+QkpWTuzQ/N3v+vHifIpzNfPBJRY/Tn9co8bnl9ZefjMCUDN5tqStJ9+vPZqqYXDk8bV6TsOroPRBnsH1Xjm/qbOYfRTK6J6id1wSKzw6AwTw6kKNoZzOrmGwpm5jXJGy9D+YSain0/DebuSedfGwPBQu9pd1gJaPN2WOzmUz56GPHpfdgPQMAAK1MxnSADZklIdyz94Md9PZ5ssHVnYNgU9rmSiVf+xZszFm/NPDUu2BvhnfIMa1R68H+9MhwjMt6BVHJSexX55TjEK30pqGWB+5AFLMFsTwvCFHNZQ9WeQVEO8/icMrrIfp5l4FxB9cOTmS0EJ/8Z3Aoa7DNY26BY/kc13vuoBygBN21Z+eSN7P27ZOu3aVikVeC03kfi0O+AJxPN4qz2MA7zuZdylKZJ/e2Vd3DZT6mZv/KebUZA513XeKz8dd3W5M3jHev4by+wX35Xs6mVUy0+MaK/EKkfWgo3m15MmfTH2sO+m8szFfDl+NUzrX8LrfnMk852669PXrMPP2Spvt3nDY73KVX8bZ9qaZRqXn6QU33zbyju6tLR/3DvG3XnmBtMk8/oum+jdfovJv077nbXqtpdcY8/bam+w/cVvPdk88WXEQMzzk8Vm7EhC/HeLmfLOjE+KYD1Ey0Om3l4HZtonuToJVrb3uccOMrx1sdsjalaVIMHB5uuEU/EeH7mu9XY4qsrSwAgJ6SWNVf8EDcyKX7sMoQuJ4T7tCL3JfDkDtncDcR0KHIDbkPgxx+nKmfd4CQG5/4ZhR0WOACfQgH/aDz8lk45PCH8/QVSOijzn/Z65DQYbbj9BtY6Cscp/dioTu/zASLHE46LY9BQ3f8l2BJaOjdTtNT0NCfO03PREPvd5q+CA095DQ9Fw19xGl6Nhr6kNP0NDT03pl64ubCHVcVDd359RVBLPRa59cUZCBJDKPYfpqyeMv+A1UFsTJts7pgQ01d9Zo5HzVI8cQvzh+vk+Vn5PMvjo5v89v9lr8MWc+0u5O/l0jxKb0yaZJrsX5T7dR9aQN+ee7UA0+nlUIXZ3WuCoQ/9HEVaKLZ5pLp2/zS/GKjRvEdrjw0UxoIb/MyvZdfmH3fN+r/mX2Y6UnDEZckGUjiKOfvZOKlK084DfaaondyLwcpaOnV3Bs0Zgo55fP/0BdY6V5+lYSLJuh3Ip4e46OLFp8br3ghvNKcg5TeZ8udaOHq/Qac9BR7ruR0iYbpw0nfKWxj9HcDyqhwGD9Kerstt2MjXHfLREl/LWyzx+gZm/hPrcRIV8RtzhikLxEPsx4j3SNu02aQHmFFXCVGul/cxugS6lXiYbZJSL9FdKITnehEJzrRiU50ohOd6EQnOtGJTnSiE53oRCc60YlOdKITnehEJzrRiU50ohOd6EQnOtGJTnSiE53oRCc60YlOdKITnehEJzrRiY6SHqH0ezlGeoSHclw3SF8sHuZLCX/JbPRBIeniYQpQ/nRfXGnBaOWwgPhPpaCkPxO2qTJapkP8cA8PSnqTsE2uUfoV0Sh/4axQsl7Yxm+ULnzOZA1OeryoyX3DdWmEB8k5SKsRiZ78Vma8BtV5/iidWGtQreW3CHmN0+fwh8nBSlf4zyQx9TAk7vNFr+IttVfIa/DGY4bu4dTxGgwgLrDYymmw3FyFxXT92dESzLUlPT26r5t+MEyx3ihbcVcUnTWg83IbMx2dmqzbGW46S5r+PW21UvB54ZTnpge13xmcdBbT8TE793C8k8rotkyqPY2Uzli5tnTygwxmNbG1z8fG6D2cOPkVtHSmlv42fjRqymYfFW9ydk7K9NrDeOmMMTUpa1FG1Erao6ZHN0QnOtGJTnSi/+/omTOXjuc5rY4/tpI9wUK/6Dj9Wyz0Msfpn2ChxztOV/pxyH9nzqcMBz3HBbryHIO8jbmRVATyfp8rdLbOdXkojbmUarfl2cy1uPu+96cwF5Pe6578mo+5GvXgiDvw3pXM9fj3uDC56VyN5AGiyZub773VvPsV64UJ6Vh+EXcJP0hyqPfWidV4n8jbZ/4EO1/c5SsmSYhOdKITnehEJzrRiU50ohOd6EQnOtGJTnSiE53oRCc60YlOdKITHQ29Whb6K/P0XHGX7bLQHwkZQb0uWWL6RlnowuIu0K3XJVFMXy4L/ZiQcU6vS4QaUsmy0IuFjErdPuIVt6osdGF5HEjV7XNSuGCKSZOnAsaAfpccEb1CHnq5gLHfwmTALw/dy69dNhrg9NnGlzcxicJfM32c10V9w/1vxctEV17wVjPzKwMV8ej7mFRJ4xQ8zBP04RT9uq/IRWcbdRlfi7qof+oeEWKZbDmgwzgl7uJ/Ob3L4FwmX3ZMY9RF6uLvntqlL4nJmEWTF8oHVxjYPTbi+qWD5ag14dJAH44YK/WXdjMMf7SUyRuloOHuewh2ny4yfgKSUNH6MjTy+vqeFEaJTv4F2Y4zlU4juWEAAAAASUVORK5CYII=">
        <h1> Oh, there is a Problem</h1>
        <br>
        We have implemented a algorithm to protect us against content theft and hackers
        <br><br>
        To <strong>regain full access</strong> to our website, please check the following box and verifiy that you are a real-human.
    </div>

    <form style="text-align: center;"  id="userVerification" method="POST">

        <div class="g-recaptcha" data-sitekey="<?php echo $this->googlePublicCaptchaKey; ?>" data-callback="submitForm"></div>

    </form>
</div>

<!--js-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    var submitForm = function () {
        $("#userVerification").submit();
    }
</script>
</body>
</html>