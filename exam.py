from collections import Counter
import pandas as pd

df = pd.read_csv('/Users/User/Desktop/edu_bigdata_imp1.csv', encoding='big5', low_memory=False)

#1-1

'''df_filtered = df[df['PseudoID'] == 39]
unique_value = df_filtered['dp001_review_sn'].unique()
print(len(unique_value))'''

#1-2

'''df_filtered = df[df['PseudoID'] == 39]
df_filtered = df_filtered.dropna(subset=['dp001_question_sn'])
unique_value = df_filtered['dp001_question_sn'].unique()
print(len(unique_value))'''

#2-1

'''df_filtered = df[df['PseudoID'] == 281]
unique_value = df_filtered['dp001_video_item_sn'].unique()
indicator = df_filtered['dp001_indicator'].unique()
for i in range(len(unique_value)):
    print(int(unique_value[i]) , "-->" , indicator[i])'''

#2-2

'''df_filtered = df[df['PseudoID'] == 281]
correct_time = df_filtered[df_filtered['dp001_prac_score_rate'] == 100]
print(len(correct_time))'''

#3-1

'''df_filtered = df[df['PseudoID'] == 71]
pause_time = df_filtered[df_filtered['dp001_record_plus_view_action'] == "paused"]
print(len(pause_time))'''

#3-2

'''df_filtered = df[df['PseudoID'] == 71]
login = df_filtered['dp001_review_start_time'].unique()
logout = df_filtered['dp001_review_end_time'].unique()
list1 = []
for i in range(len(login)):
    for j in range(0, 10):
        if login[i][j] == logout[i][j]:
            list1.append(login[i][0:10])
for z in (list(set(list1))):
    print(z)'''

#4-1

'''df_filtered = df['dp001_review_sn'].value_counts()
ans = df_filtered.idxmax()
time = df[df['dp001_review_sn'] == ans]
print(int(ans))
print("(FREQ:" + str(len(time)) + ")")'''

#4-2

'''df_filtered = df[df['dp002_extensions_alignment'] == '["十二年國民基本教育類"]']
print(len(df_filtered))'''

#4-3

'''df_filtered = df["dp002_verb_display_zh_TW"].dropna()#.value_counts()
count = Counter(df_filtered)
ans = [item[0] for item in count.most_common(3)]
for i in ans:
    print(i, end =" ")'''

#4-4

df_filtered = df[df['dp002_extensions_alignment'] == '["校園職業安全"]']
print(len(df_filtered))