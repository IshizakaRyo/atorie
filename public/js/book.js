//今日の日時を表示
    window.onload = function () {
        //今日の日時を表示
        var date = new Date()
        var year = date.getFullYear()
        var month = date.getMonth() + 1
        var day = date.getDate()
    
        var toTwoDigits = function (num, digit) {
        num += ''
        if (num.length < digit) {
            num = '0' + num
        }
        return num
        }
        
        var yyyy = toTwoDigits(year, 4)
        var mm = toTwoDigits(month, 2)
        var dd = toTwoDigits(day, 2)
        var ymd = yyyy + "-" + mm + "-" + dd;
        
        document.getElementById("today").value = ymd;
    }

    // 画像のプレビューを表示
    var image = document.getElementById("image");
    
    image.addEventListener("change", function(){

        var image_viw = document.getElementById("preview");

        console.log(image.files[0].name);
        //image_viw.src = image.files[0].name;
        //NOTE:Fileオブジェクトを開放する
        URL.revokeObjectURL(image_viw.src);
        //FileオブジェクトをBlob URIスキームに変換してimg要素に読み込む
        image_viw.src = URL.createObjectURL(image.files[0]);
    });