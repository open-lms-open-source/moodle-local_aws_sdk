<?php
// This file was auto-generated from sdk-root/src/data/monitoring/2010-08-01/paginators-1.json
return [ 'pagination' => [ 'DescribeAlarmHistory' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxRecords', 'output_token' => 'NextToken', 'result_key' => 'AlarmHistoryItems', ], 'DescribeAlarms' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxRecords', 'output_token' => 'NextToken', 'result_key' => [ 'MetricAlarms', 'CompositeAlarms', ], ], 'DescribeAlarmsForMetric' => [ 'result_key' => 'MetricAlarms', ], 'DescribeAnomalyDetectors' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', 'result_key' => 'AnomalyDetectors', ], 'DescribeInsightRules' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', ], 'GetMetricData' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxDatapoints', 'output_token' => 'NextToken', 'result_key' => [ 'MetricDataResults', 'Messages', ], ], 'ListDashboards' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => 'DashboardEntries', ], 'ListManagedInsightRules' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', ], 'ListMetricStreams' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', ], 'ListMetrics' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => 'Metrics', ], ],];
