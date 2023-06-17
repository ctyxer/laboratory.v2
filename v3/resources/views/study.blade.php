@extends('layouts.app')

@section('title', 'Учёба')

@section('content')
    <h2 align="center">Учёба</h2>
    <p style="margin-left: 40px"> Институт информационных технологий (ИИТ), <br>
        кафедра информационные системы (ИС) </p>
    <p style="margin-left: 40px"> Перечень изучаемых дисциплин с 1 по 4 семестр, выполненный в виде таблицы: </p>
    <table class="table">
        <TR CLASS=title>
            <TH COLSPAN=10>План учебного процесса</TH>
        </TR>
        <TR CLASS=title>
            <TH ROWSPAN=2>№</TH>
            <TH ROWSPAN=2>Дисциплина</TH>
            <TH ROWSPAN=2>Кафедра</TH>
            <TH COLSPAN=6>Всего часов</TH>
        </TR>
        <TR>
            <TD CLASS=title>Всего</TD>
            <TD CLASS=data>Ауд</TD>
            <TD CLASS=data>Лк</TD>
            <TD CLASS=data>Лб</TD>
            <TD CLASS=data>Пр</TD>
            <TD CLASS=data>СРС</TD>
        </TR>
        <TR>
            <TD CLASS=title>1</TD>
            <TD CLASS=data>Экология</TD>
            <TD CLASS=data>БЖ</TD>
            <TD CLASS=title>54</TD>
            <TD CLASS=title>27</TD>
            <TD CLASS=title>18</TD>
            <TD CLASS=title>0</TD>
            <TD CLASS=title>9</TD>
            <TD CLASS=title>27</TD>
        </TR>
        <TR>
            <TD CLASS=title>2</TD>
            <TD CLASS=data>Высшая математика</TD>
            <TD CLASS=data>ВМ</TD>
            <TD CLASS=title>540</TD>
            <TD CLASS=title>282</TD>
            <TD CLASS=title>141</TD>
            <TD CLASS=title>0</TD>
            <TD CLASS=title>141</TD>
            <TD CLASS=title>258</TD>
        </TR>
        <TR>
            <TD CLASS=title>3</TD>
            <TD CLASS=data>Русский язык и культура речи</TD>
            <TD CLASS=data>НГиГ</TD>
            <TD CLASS=title>108</TD>
            <TD CLASS=title>54</TD>
            <TD CLASS=title>18</TD>
            <TD CLASS=title>0</TD>
            <TD CLASS=title>36</TD>
            <TD CLASS=title>54</TD>
        </TR>
        <TR>
            <TD CLASS=title>4</TD>
            <TD CLASS=data>Основы дискретной математики</TD>
            <TD CLASS=data>ИС</TD>
            <TD CLASS=title>216</TD>
            <TD CLASS=title>139</TD>
            <TD CLASS=title>87</TD>
            <TD CLASS=title>0</TD>
            <TD CLASS=title>52</TD>
            <TD CLASS=title>77</TD>
        </TR>
        <TR>
            <TD CLASS=title>5</TD>
            <TD CLASS=data>Основы программирования и алгоритмические языки</TD>
            <TD CLASS=data>ИС</TD>
            <TD CLASS=title>405</TD>
            <TD CLASS=title>210</TD>
            <TD CLASS=title>105</TD>
            <TD CLASS=title>87</TD>
            <TD CLASS=title>18</TD>
            <TD CLASS=title>195</TD>
        </TR>
        <TR>
            <TD CLASS=title>6</TD>
            <TD CLASS=data>Основы экологии</TD>
            <TD CLASS=data>ПЭОП</TD>
            <TD CLASS=title>54</TD>
            <TD CLASS=title>27</TD>
            <TD CLASS=title>18</TD>
            <TD CLASS=title>0</TD>
            <TD CLASS=title>9</TD>
            <TD CLASS=title>27</TD>
        </TR>
        <TR>
            <TD CLASS=title>7</TD>
            <TD CLASS=data>Теория вероятностей и математическая статистика</TD>
            <TD CLASS=data>ИС</TD>
            <TD CLASS=title>162</TD>
            <TD CLASS=title>72</TD>
            <TD CLASS=title>54</TD>
            <TD CLASS=title>18</TD>
            <TD CLASS=title>0</TD>
            <TD CLASS=title>90</TD>
        </TR>
        <TR>
            <TD CLASS=title>8</TD>
            <TD CLASS=data>Физика</TD>
            <TD CLASS=data>Физики</TD>
            <TD CLASS=title>324</TD>
            <TD CLASS=title>194</TD>
            <TD CLASS=title>106</TD>
            <TD CLASS=title>88</TD>
            <TD CLASS=title>0</TD>
            <TD CLASS=title>130</TD>
        </TR>
        <TR>
            <TD CLASS=title>9</TD>
            <TD CLASS=data>Основы электротехники и электроники</TD>
            <TD CLASS=data>ИС</TD>
            <TD CLASS=title>108</TD>
            <TD CLASS=title>72</TD>
            <TD CLASS=title>36</TD>
            <TD CLASS=title>18</TD>
            <TD CLASS=title>18</TD>
            <TD CLASS=title>36</TD>
        </TR>
        <TR>
            <TD CLASS=title>10</TD>
            <TD CLASS=data>Численные методы в информатике</TD>
            <TD CLASS=data>ИС</TD>
            <TD CLASS=title>189</TD>
            <TD CLASS=title>89</TD>
            <TD CLASS=title>36</TD>
            <TD CLASS=title>36</TD>
            <TD CLASS=title>17</TD>
            <TD CLASS=title>100</TD>
        </TR>
        <TR>
            <TD CLASS=title>11</TD>
            <TD CLASS=data>Методы исследования операций</TD>
            <TD CLASS=data>ИС</TD>
            <TD CLASS=title>216</TD>
            <TD CLASS=title>104</TD>
            <TD CLASS=title>54</TD>
            <TD CLASS=title>35</TD>
            <TD CLASS=title>17</TD>
            <TD CLASS=title>112</TD>
        </TR>
    </table>
    <pre>  </pre>
    <table class="table mb-6">
        <TR CLASS=title>
            <TH ROWSPAN=3>№</TH>
            <TH ROWSPAN=3>Дисциплина</TH>
            <TH COLSPAN=12>Часов в неделю<br>(Лекций, Лаб. раб., Практ. раб)</TH>
        </TR>
        <TR>
            <TH COLSPAN=6>1 курс</TH>
            <TH COLSPAN=6>2 курс</TH>
        </TR>
        <TR>
            <TH COLSPAN=3>1 семестр</TH>
            <TH COLSPAN=3>2 семестр</TH>
            <TH COLSPAN=3>3 семестр</TH>
            <TH COLSPAN=3>4 семестр</TH>
        </TR>
        <TR>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>Экология</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
        </TR>
        <TR>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>Высшая математика</TD>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
        </TR>
        <TR>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>Русский язык и культура речи</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
        </TR>
        <TR>
            <TD CLASS=data>4</TD>
            <TD CLASS=data>Основы дискретной математики</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
        </TR>
        <TR>
            <TD CLASS=data>5</TD>
            <TD CLASS=data>Основы программирования и алгоритмические языки</TD>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
        </TR>
        <TR>
            <TD CLASS=data>6</TD>
            <TD CLASS=data>Основы экологии</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
        </TR>
        <TR>
            <TD CLASS=data>7</TD>
            <TD CLASS=data>Теория вероятностей и математическая статистика</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data>3</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
        </TR>
        <TR>
            <TD CLASS=data>8</TD>
            <TD CLASS=data>Физика</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
        </TR>
        <TR>
            <TD CLASS=data>9</TD>
            <TD CLASS=data>Основы электротехники и электроники</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
        </TR>
        <TR>
            <TD CLASS=data>10</TD>
            <TD CLASS=data>Численные методы в информатике</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>1</TD>
        </TR>
        <TR>
            <TD CLASS=data>11</TD>
            <TD CLASS=data>Методы исследования операция</TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data></TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>0</TD>
            <TD CLASS=data>2</TD>
            <TD CLASS=data>1</TD>
            <TD CLASS=data>1</TD>
        </TR>
    </table>

@endsection
