@extends('layouts.app')

@section('title', 'Reports')
@section('subtitle', '/ Generated Reports')

@section('content')
<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:28px;">
  <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Total Reports</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--cyan);line-height:1;margin-bottom:6px;">48</div>
    <div style="font-size:12px;color:var(--text3);">Generated this month</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Downloaded</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--green);line-height:1;margin-bottom:6px;">31</div>
    <div style="font-size:12px;color:var(--text3);">By you and your team</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Shared with Clients</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--purple);line-height:1;margin-bottom:6px;">17</div>
    <div style="font-size:12px;color:var(--text3);">White-label PDFs</div>
  </div>
</div>

<div class="panel">
  <div class="panel-header">
    <div class="panel-title">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
      Generated Reports
    </div>
    <div class="panel-actions">
      <select class="form-input" style="padding:6px 12px;font-size:12px;width:auto;"><option>All Sites</option></select>
      <button class="btn btn-primary btn-sm">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        Generate Report
      </button>
    </div>
  </div>
  <div style="padding:16px 20px;">
  
  <div class="report-card">
    <div class="report-icon" style="background:var(--red-dim);color:var(--red);">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <div class="report-meta">
      <div class="report-name">🌐 Acme Corp — Full Security Report</div>
      <div class="report-sub">acmecorp.com · Scan #1042 · 8 findings · 2 min ago</div>
    </div>
    <span class="risk-badge risk-critical">Critical</span>
    <span class="tag tag-cyan" style="flex-shrink:0;">PDF</span>
    <div class="report-actions">
      <button class="mini-btn">View</button>
      <button class="mini-btn">Download</button>
      <button class="mini-btn">Share</button>
    </div>
  </div>
  <div class="report-card">
    <div class="report-icon" style="background:var(--red-dim);color:var(--red);">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <div class="report-meta">
      <div class="report-name">🛒 ShopFast — Security Audit Report</div>
      <div class="report-sub">shopfast.io · Scan #1040 · 5 findings · 1 hr ago</div>
    </div>
    <span class="risk-badge risk-high">High</span>
    <span class="tag tag-cyan" style="flex-shrink:0;">PDF</span>
    <div class="report-actions">
      <button class="mini-btn">View</button>
      <button class="mini-btn">Download</button>
      <button class="mini-btn">Share</button>
    </div>
  </div>
  <div class="report-card">
    <div class="report-icon" style="background:var(--red-dim);color:var(--red);">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <div class="report-meta">
      <div class="report-name">🏢 TechStartup — Monthly Report</div>
      <div class="report-sub">techstartup.dev · Scan #1039 · 3 findings · 3 hrs ago</div>
    </div>
    <span class="risk-badge risk-medium">Medium</span>
    <span class="tag tag-cyan" style="flex-shrink:0;">PDF</span>
    <div class="report-actions">
      <button class="mini-btn">View</button>
      <button class="mini-btn">Download</button>
      <button class="mini-btn">Share</button>
    </div>
  </div>
  <div class="report-card">
    <div class="report-icon" style="background:var(--red-dim);color:var(--red);">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <div class="report-meta">
      <div class="report-name">🏥 HealthClinic — Executive Summary</div>
      <div class="report-sub">healthclinic.care · Scan #1038 · 9 findings · 4 hrs ago</div>
    </div>
    <span class="risk-badge risk-critical">Critical</span>
    <span class="tag tag-cyan" style="flex-shrink:0;">PDF</span>
    <div class="report-actions">
      <button class="mini-btn">View</button>
      <button class="mini-btn">Download</button>
      <button class="mini-btn">Share</button>
    </div>
  </div>
  <div class="report-card">
    <div class="report-icon" style="background:var(--red-dim);color:var(--red);">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <div class="report-meta">
      <div class="report-name">📰 NewsBlog — Security Report</div>
      <div class="report-sub">newsblog.co · Scan #1037 · 1 finding · Yesterday</div>
    </div>
    <span class="risk-badge risk-low">Low</span>
    <span class="tag tag-cyan" style="flex-shrink:0;">PDF</span>
    <div class="report-actions">
      <button class="mini-btn">View</button>
      <button class="mini-btn">Download</button>
      <button class="mini-btn">Share</button>
    </div>
  </div>
  <div class="report-card">
    <div class="report-icon" style="background:var(--red-dim);color:var(--red);">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <div class="report-meta">
      <div class="report-name">💼 LegalFirm — Client Report (White-label)</div>
      <div class="report-sub">legalfirm.law · Scan #1036 · 6 findings · 2 days ago</div>
    </div>
    <span class="risk-badge risk-high">High</span>
    <span class="tag tag-cyan" style="flex-shrink:0;">PDF</span>
    <div class="report-actions">
      <button class="mini-btn">View</button>
      <button class="mini-btn">Download</button>
      <button class="mini-btn">Share</button>
    </div>
  </div>
  <div class="report-card">
    <div class="report-icon" style="background:var(--red-dim);color:var(--red);">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
    </div>
    <div class="report-meta">
      <div class="report-name">🎓 EduPortal — Monthly Summary</div>
      <div class="report-sub">eduportal.io · Scan #1035 · 2 findings · 2 days ago</div>
    </div>
    <span class="risk-badge risk-medium">Medium</span>
    <span class="tag tag-cyan" style="flex-shrink:0;">PDF</span>
    <div class="report-actions">
      <button class="mini-btn">View</button>
      <button class="mini-btn">Download</button>
      <button class="mini-btn">Share</button>
    </div>
  </div>
  </div>
</div>
@endsection
