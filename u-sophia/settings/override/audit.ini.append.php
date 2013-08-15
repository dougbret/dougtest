<?php /* #?ini charset="utf-8"?

[AuditSettings]
Audit=enabled
LogDir=var/log/audit
# If 'enabled' the possibility will be enabled.


# Audit file names setting.
# The key of AuditFileNames[] is the name of audit and value is file name.
#    For example:
#    AuditFileNames[<name of audit>]=<file name>
# Always clients IP address and user names(if exist) will be logged.
AuditFileNames[]

# Logins and User IP address will be logged
AuditFileNames[user-login]=login.log

# Failed login attempts will be logged
AuditFileNames[user-failed-login]=failed_login.log

# Who deletes which content (Things which will be logged: user / node id / object id / content name / time)
AuditFileNames[content-delete]=content_delete.log

# Who moves content (user / node id / old parent / new parent / object name / time)
AuditFileNames[content-move]=content_move.log

# Who changes which role(s) (user / role id / role name / time)
AuditFileNames[role-change]=role_change.log

# Who assigns which role to whom (user / role id / role name / time)
AuditFileNames[role-assign]=role_assign.log

# Who assigns which section at which node (user / section id / section name)
AuditFileNames[section-assign]=section_assign.log

# Who deleted which order in shop (user / order id)
AuditFileNames[order-delete]=order_delete.log



*/ ?>