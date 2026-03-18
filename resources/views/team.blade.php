@extends('layouts.app')

@section('title', 'Team')
@section('subtitle', '/ Members & Permissions')

@section('content')
<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:28px;">
  <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Team Members</div>
    <div style="font-size:36px;font-weight:800;font-family:var(--font-display);color:var(--cyan);line-height:1;">4</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Active Sessions</div>
    <div style="font-size:36px;font-weight:800;font-family:var(--font-display);color:var(--green);line-height:1;">3</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Pending Invites</div>
    <div style="font-size:36px;font-weight:800;font-family:var(--font-display);color:var(--purple);line-height:1;">1</div>
  </div>
</div>

<div class="panel">
  <div class="panel-header">
    <div class="panel-title">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
      Team Members
    </div>
    <button class="btn btn-primary btn-sm" onclick="document.getElementById('inviteModal').style.display='flex'">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      Invite Member
    </button>
  </div>
  <div style="padding:16px 20px;">
  
  <div class="member-card">
    <div class="member-avatar" style="background:linear-gradient(135deg,#ff3d5a,#a78bfa);">AH</div>
    <div class="member-info">
      <div class="member-name">Ahmad Hassan</div>
      <div class="member-email">ahmad@acmeagency.com</div>
    </div>
    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:6px;">
      <span class="role-badge role-owner">Owner</span>
      <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">Active now</span>
    </div>
    <div style="display:flex;gap:6px;margin-left:12px;">
      
    </div>
  </div>
  <div class="member-card">
    <div class="member-avatar" style="background:linear-gradient(135deg,#00d4ff,#a78bfa);">SA</div>
    <div class="member-info">
      <div class="member-name">Sara Ahmed</div>
      <div class="member-email">sara@acmeagency.com</div>
    </div>
    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:6px;">
      <span class="role-badge role-admin">Admin</span>
      <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">2 hrs ago</span>
    </div>
    <div style="display:flex;gap:6px;margin-left:12px;">
      <button class="mini-btn">Edit Role</button><button class="mini-btn" style="color:var(--red);">Remove</button>
    </div>
  </div>
  <div class="member-card">
    <div class="member-avatar" style="background:linear-gradient(135deg,#00ff88,#00d4ff);">MK</div>
    <div class="member-info">
      <div class="member-name">Malik Khan</div>
      <div class="member-email">malik@acmeagency.com</div>
    </div>
    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:6px;">
      <span class="role-badge role-member">Member</span>
      <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">Yesterday</span>
    </div>
    <div style="display:flex;gap:6px;margin-left:12px;">
      <button class="mini-btn">Edit Role</button><button class="mini-btn" style="color:var(--red);">Remove</button>
    </div>
  </div>
  <div class="member-card">
    <div class="member-avatar" style="background:linear-gradient(135deg,#ffd166,#ff8c42);">FZ</div>
    <div class="member-info">
      <div class="member-name">Fatima Zahra</div>
      <div class="member-email">fatima@acmeagency.com</div>
    </div>
    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:6px;">
      <span class="role-badge role-member">Member</span>
      <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">3 days ago</span>
    </div>
    <div style="display:flex;gap:6px;margin-left:12px;">
      <button class="mini-btn">Edit Role</button><button class="mini-btn" style="color:var(--red);">Remove</button>
    </div>
  </div>

  <!-- Pending Invite -->
  <div class="member-card" style="opacity:.6;border-style:dashed;">
    <div class="member-avatar" style="background:var(--bg3);border:2px dashed var(--border2);">?</div>
    <div class="member-info">
      <div class="member-name" style="color:var(--text3);">Invite Pending</div>
      <div class="member-email">zain@client.com</div>
    </div>
    <span class="tag tag-orange">Pending</span>
    <button class="mini-btn" style="margin-left:12px;">Resend</button>
    <button class="mini-btn" style="color:var(--red);">Cancel</button>
  </div>

  <div class="invite-box" onclick="document.getElementById('inviteModal').style.display='flex'">
    <div style="font-size:24px;margin-bottom:8px;">+</div>
    <div style="font-weight:600;color:var(--text2);">Invite a team member</div>
    <div style="font-size:12px;color:var(--text3);margin-top:4px;">Add colleagues to collaborate on security monitoring</div>
  </div>
  </div>
</div>

<!-- Permissions Table -->
<div class="panel">
  <div class="panel-header">
    <div class="panel-title">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
      Role Permissions
    </div>
  </div>
  <table class="data-table">
    <thead><tr><th>Permission</th><th>Owner</th><th>Admin</th><th>Member</th></tr></thead>
    <tbody>
    <tr>
      <td style="font-size:13px;color:var(--text2);">Add / remove sites</td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--text3);">—</span></td>
    </tr><tr>
      <td style="font-size:13px;color:var(--text2);">Trigger scans</td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
    </tr><tr>
      <td style="font-size:13px;color:var(--text2);">View findings</td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
    </tr><tr>
      <td style="font-size:13px;color:var(--text2);">Download reports</td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
    </tr><tr>
      <td style="font-size:13px;color:var(--text2);">Generate white-label reports</td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--text3);">—</span></td>
    </tr><tr>
      <td style="font-size:13px;color:var(--text2);">Manage team members</td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--text3);">—</span></td>
    </tr><tr>
      <td style="font-size:13px;color:var(--text2);">Manage billing</td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--text3);">—</span></td>
      <td><span style="color:var(--text3);">—</span></td>
    </tr><tr>
      <td style="font-size:13px;color:var(--text2);">Access API keys</td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--text3);">—</span></td>
    </tr><tr>
      <td style="font-size:13px;color:var(--text2);">Delete workspace</td>
      <td><span style="color:var(--green);">✓</span></td>
      <td><span style="color:var(--text3);">—</span></td>
      <td><span style="color:var(--text3);">—</span></td>
    </tr>
    </tbody>
  </table>
</div>

<!-- Invite Modal -->
<div id="inviteModal" class="modal-backdrop" style="display:none;" onclick="if(event.target===this)this.style.display='none'">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title">Invite Team Member</div>
      <div class="modal-close" onclick="document.getElementById('inviteModal').style.display='none'"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>
    </div>
    <div class="modal-body">
      <div class="form-group"><label class="form-label">Email Address</label><input class="form-input" type="email" placeholder="colleague@company.com"/></div>
      <div class="form-group"><label class="form-label">Role</label>
        <select class="form-input"><option>Member — View and download reports</option><option>Admin — Full access except billing</option></select>
      </div>
      <div class="form-group"><label class="form-label">Message (optional)</label><textarea class="form-input" rows="3" placeholder="Add a personal message…" style="resize:none;"></textarea></div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-ghost" onclick="document.getElementById('inviteModal').style.display='none'">Cancel</button>
      <button class="btn btn-primary">Send Invitation</button>
    </div>
  </div>
</div>
@endsection
