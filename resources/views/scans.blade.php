@extends('layouts.app')

@section('title', 'Scans')
@section('subtitle', '/ Scan History')

@section('content')
<!-- Stats row -->
<div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:24px;">
  <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;position:relative;overflow:hidden;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Total Scans</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--cyan);line-height:1;margin-bottom:6px;">1,204</div>
    <div style="font-size:12px;color:var(--text3);">↑ 148 this month</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;position:relative;overflow:hidden;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Completed</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--green);line-height:1;margin-bottom:6px;">1,186</div>
    <div style="font-size:12px;color:var(--text3);">98.5% success rate</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;position:relative;overflow:hidden;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Failed</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--red);line-height:1;margin-bottom:6px;">18</div>
    <div style="font-size:12px;color:var(--text3);">1.5% failure rate</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;position:relative;overflow:hidden;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Avg Duration</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--orange);line-height:1;margin-bottom:6px;">24s</div>
    <div style="font-size:12px;color:var(--text3);">Per full scan</div>
  </div>
</div>

<div class="panel">
  <div class="panel-header">
    <div class="panel-title">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
      Scan History
    </div>
    <div class="panel-actions">
      <select class="form-input" style="padding:6px 12px;font-size:12px;width:auto;">
        <option>All Sites</option><option>Acme Corp</option><option>ShopFast</option>
      </select>
      <select class="form-input" style="padding:6px 12px;font-size:12px;width:auto;">
        <option>All Status</option><option>Complete</option><option>Failed</option><option>Running</option>
      </select>
    </div>
  </div>
  <table class="data-table">
    <thead><tr><th>#</th><th>Site</th><th>Status</th><th>Risk Score</th><th>Findings</th><th>Duration</th><th>Started</th><th></th></tr></thead>
    <tbody>
      <tr>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">#1042</span></td>
          <td><span style="font-weight:600;font-size:13px;">🌐 Acme Corp</span></td>
          <td><span class="status-pill status-running"><span class="pulse"></span> Running</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--red);">88</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">8</span></td>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">—</span></td>
          <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">2 min ago</span></td>
          <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button></div></td>
        </tr><tr>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">#1041</span></td>
          <td><span style="font-weight:600;font-size:13px;">🏦 FinanceApp</span></td>
          <td><span class="status-pill status-running"><span class="pulse"></span> Running</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--orange);">74</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">7</span></td>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">—</span></td>
          <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">5 min ago</span></td>
          <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button></div></td>
        </tr><tr>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">#1040</span></td>
          <td><span style="font-weight:600;font-size:13px;">🛒 ShopFast</span></td>
          <td><span class="status-pill status-complete"><span class="dot" style="background:var(--green)"></span> Complete</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--orange);">65</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">5</span></td>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">21s</span></td>
          <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">1 hr ago</span></td>
          <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button></div></td>
        </tr><tr>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">#1039</span></td>
          <td><span style="font-weight:600;font-size:13px;">🏢 TechStartup</span></td>
          <td><span class="status-pill status-complete"><span class="dot" style="background:var(--green)"></span> Complete</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--yellow);">42</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">3</span></td>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">18s</span></td>
          <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">3 hrs ago</span></td>
          <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button></div></td>
        </tr><tr>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">#1038</span></td>
          <td><span style="font-weight:600;font-size:13px;">🏥 HealthClinic</span></td>
          <td><span class="status-pill status-complete"><span class="dot" style="background:var(--green)"></span> Complete</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--red);">91</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">9</span></td>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">34s</span></td>
          <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">4 hrs ago</span></td>
          <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button></div></td>
        </tr><tr>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">#1037</span></td>
          <td><span style="font-weight:600;font-size:13px;">📰 NewsBlog</span></td>
          <td><span class="status-pill status-complete"><span class="dot" style="background:var(--green)"></span> Complete</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--green);">18</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">1</span></td>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">14s</span></td>
          <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">Yesterday</span></td>
          <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button></div></td>
        </tr><tr>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">#1036</span></td>
          <td><span style="font-weight:600;font-size:13px;">💼 LegalFirm</span></td>
          <td><span class="status-pill status-failed"><span class="dot" style="background:var(--red)"></span> Failed</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--orange);">71</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">6</span></td>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">—</span></td>
          <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">2 days ago</span></td>
          <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button><button class="mini-btn">Retry</button></div></td>
        </tr><tr>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">#1035</span></td>
          <td><span style="font-weight:600;font-size:13px;">🎓 EduPortal</span></td>
          <td><span class="status-pill status-complete"><span class="dot" style="background:var(--green)"></span> Complete</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--yellow);">38</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">2</span></td>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">19s</span></td>
          <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">2 days ago</span></td>
          <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button></div></td>
        </tr><tr>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">#1034</span></td>
          <td><span style="font-weight:600;font-size:13px;">🎮 GameSite</span></td>
          <td><span class="status-pill status-complete"><span class="dot" style="background:var(--green)"></span> Complete</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--green);">22</span></td>
          <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">1</span></td>
          <td><span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);">12s</span></td>
          <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">3 days ago</span></td>
          <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button></div></td>
        </tr>
    </tbody>
  </table>
  <div style="padding:14px 20px;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;">
    <span style="font-size:12px;color:var(--text3);">Showing 9 of 1,204 scans</span>
    <div style="display:flex;gap:6px;">
      <button class="mini-btn">← Prev</button>
      <button class="mini-btn" style="border-color:var(--cyan);color:var(--cyan);">1</button>
      <button class="mini-btn">2</button>
      <button class="mini-btn">3</button>
      <button class="mini-btn">Next →</button>
    </div>
  </div>
</div>
<style>.data-table tbody tr:hover .row-acts{opacity:1!important;}</style>
@endsection
