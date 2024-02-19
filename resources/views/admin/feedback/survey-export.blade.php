<table>
    <thead>
    <tr>
        <th>Timestamp</th>
        @foreach ($question_data as $item)
            <th>{{$item->question}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
   
        @foreach ($surveyAnsData as $item)
        <tr>
            <td>{{date("d M Y H:i A",strtotime($item->created_at))}}</td>
            @foreach ($item->survey_answer as $val)
                <td>{{$val->answer}}</td>
            @endforeach
        </tr>
        @endforeach
       
    
    </tbody>
</table>