var DataFrame = dfjs.DataFrame

DataFrame.fromCSV('https://raw.githubusercontent.com/plotly/datasets/master/iris.csv')
.then(df => document.getElementById('Content').innerHTML = df.show())
.catch(err => window.alert(err))